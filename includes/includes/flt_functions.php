<?php

function flt_fleet_speed($user, $fleet)
{
  global $sn_data;

  if (!is_array($fleet))
  {
    $fleet = array($fleet => 1);
  }

  $speeds = array();
  if(!empty($fleet))
  {
    foreach ($fleet as $ship_id => $amount)
    {
      if($amount && in_array($ship_id, $sn_data['groups']['fleet']))
      {
        $single_ship_data = get_ship_data($ship_id, $user);
        $speeds[] = $single_ship_data['speed'];
      }
    }
  }

  return empty($speeds) ? 0 : min($speeds);
}

function flt_travel_data($user_row, $from, $to, $fleet_array, $speed_percent = 10)
{
  if($from['galaxy'] != $to['galaxy'])
  {
    $distance = abs($from['galaxy'] - $to['galaxy']) * 20000;
  }
  elseif($from['system'] != $to['system'])
  {
    $distance = abs($from['system'] - $to['system']) * 5 * 19 + 2700;
  }
  elseif($from['planet'] != $to['planet'])
  {
    $distance = abs($from['planet'] - $to['planet']) * 5 + 1000;
  }
  else
  {
    $distance = 5;
  }

  $consumption = 0;
  $duration = 0;

  $game_fleet_speed = flt_server_flight_speed_multiplier();
  $fleet_speed = flt_fleet_speed($user_row, $fleet_array);
  if(!empty($fleet_array) && $fleet_speed && $game_fleet_speed)
  {
    $speed_percent = $speed_percent ? max(min($speed_percent, 10), 1) : 10;
    $real_speed = $speed_percent * sqrt($fleet_speed);

    $duration = max(1, round((35000 / $speed_percent * sqrt($distance * 10 / $fleet_speed) + 10) / $game_fleet_speed));

    foreach($fleet_array as $ship_id => $ship_count)
    {
      if (!$ship_id || !$ship_count)
      {
        continue;
      }

      $single_ship_data = get_ship_data($ship_id, $user_row);
      $single_ship_data['speed'] = $single_ship_data['speed'] < 1 ? 1 : $single_ship_data['speed'];

      $consumption += $single_ship_data['consumption'] * $ship_count * pow($real_speed / sqrt($single_ship_data['speed']) / 10 + 1, 2);
    }

    $consumption = round($distance * $consumption / 35000) + 1;
  }

  return array(
    'fleet_speed' => $fleet_speed,
    'distance' => $distance,
    'duration' => $duration,
    'consumption' => $consumption,
  );
}

function flt_bashing_check($user, $enemy, $planet_dst, $mission, $flight_duration, $fleet_group = 0)
{
  $time_now = $GLOBALS['time_now'];
  $config = &$GLOBALS['config'];

  $config_bashing_attacks = $config->fleet_bashing_attacks;
  $config_bashing_interval = $config->fleet_bashing_interval;
  if(!$config_bashing_attacks)
  {
    // Bashing allowed - protection disabled
    return ATTACK_ALLOWED;
  }

  $bashing_result = ATTACK_BASHING;
  if($user['ally_id'] && $enemy['ally_id'])
  {
    $relations = ali_relations($user['ally_id'], $enemy['ally_id']);
    if(!empty($relations))
    {
      $relations = $relations[$enemy['ally_id']];
      switch($relations['alliance_diplomacy_relation'])
      {
        case ALLY_DIPLOMACY_WAR:
          if($time_now - $relations['alliance_diplomacy_time'] <= $config->fleet_bashing_war_delay)
          {
            $bashing_result = ATTACK_BASHING_WAR_DELAY;
          }
          else
          {
            return ATTACK_ALLOWED;
          }
        break;
        // Here goes other relations

/*
        default:
          return ATTACK_ALLOWED;
        break;
*/
      }
    }
  }

  $time_now += $flight_duration;
  $time_limit = $time_now - $config->fleet_bashing_scope;
  $bashing_list = array($time_now);

  // Retrieving flying fleets
  $flying_fleets = array();
  $query = doquery("SELECT fleet_group, fleet_start_time FROM {{fleets}} WHERE
  fleet_end_galaxy = {$planet_dst['galaxy']} AND
  fleet_end_system = {$planet_dst['system']} AND
  fleet_end_planet = {$planet_dst['planet']} AND
  fleet_end_type   = {$planet_dst['planet_type']} AND
  fleet_owner = {$user['id']} AND fleet_mission IN (" . MT_ATTACK . "," . MT_AKS . "," . MT_DESTROY . ") AND fleet_mess = 0;");
  while($bashing_fleets = mysql_fetch_assoc($query))
  {
    // Checking for ACS - each ACS count only once
    if($bashing_fleets['fleet_group'])
    {
      $bashing_list["{$user['id']}_{$bashing_fleets['fleet_group']}"] = $bashing_fleets['fleet_start_time'];
    }
    else
    {
      $bashing_list[] = $bashing_fleets['fleet_start_time'];
    }
  }

  // Check for joining to ACS - if there are already fleets in ACS no checks should be done
  if($mission == MT_AKS && $bashing_list["{$user['id']}_{$fleet_group}"])
  {
    return ATTACK_ALLOWED;
  }

  $query = doquery("SELECT bashing_time FROM {{bashing}} WHERE bashing_user_id = {$user['id']} AND bashing_planet_id = {$planet_dst['id']} AND bashing_time >= {$time_limit};");
  while($bashing_row = mysql_fetch_assoc($query))
  {
    $bashing_list[] = $bashing_row['bashing_time'];
  }

  sort($bashing_list);

  $last_attack = 0;
  $wave = 0;
  $attack = 1;
  foreach($bashing_list as &$bash_time)
  {
    $attack++;
    if($bash_time - $last_attack > $config_bashing_interval || $attack > $config_bashing_attacks)
    {
      $attack = 1;
      $wave++;
    }

    $last_attack = $bash_time;
  }

  return ($wave > $config->fleet_bashing_waves ? $bashing_result : ATTACK_ALLOWED);
}

function flt_can_attack($planet_src, $planet_dst, $fleet = array(), $mission, $options = false)
{
  //TODO: try..catch

  global $config, $sn_data, $user, $time_now;

  if($user['vacation'])
  {
    return ATTACK_OWN_VACATION;
  }

  if(empty($fleet) || !is_array($fleet))
  {
    return ATTACK_NO_FLEET;
  }

//TODO: �������� �� ������� �������� ��� ����������
//TODO: �������� �� ���������� �������� � �������������� ������� (���������, ��������������, �����������)
  $ships = 0;
  $resources = 0;
  foreach($fleet as $ship_id => $ship_count)
  {
    $is_ship = in_array($ship_id, $sn_data['groups']['fleet']);
    if($ship_count > $planet_src[$sn_data[$ship_id]['name']])
    {
      return $is_ship ? ATTACK_NO_SHIPS : ATTACK_NO_RESOURCES;
    }
    if($is_ship)
    {
      $ships += $ship_count;
    }
    /*
    else
    {
      $resources += $ship_count;
    }
    */
  }

  if($ships <= 0)
  {
    return ATTACK_NO_FLEET;
  }
/*
  if($resources > 0)
  {
    if(!in_array($mission, array(MT_TRANSPORT, MT_RELOCATE, MT_COLONIZE)))
    {
      return ATTACK_RESOURCE_FORBIDDEN;
    }
  }
  elseif($mission == MT_TRANSPORT)
  {
    return ATTACK_TRANSPORT_EMPTY;
  }
*/
  $speed = $options['fleet_speed_percent'];
  if($speed && ($speed != intval($speed) || $speed < 1 || $speed > 10))
  {
    return ATTACK_WRONG_SPEED;
  }

  $travel_data = flt_travel_data($user, $planet_src, $planet_dst, $fleet, $options['fleet_speed_percent']);

  if($planet_src[$sn_data[RES_DEUTERIUM]['name']] < $fleet[RES_DEUTERIUM] + $travel_data['consumption'])
  {
    return ATTACK_NO_FUEL;
  }

  $fleet_start_time = $time_now + $travel_data['duration'];

  $fleet_group = $options['fleet_group'];
  if($fleet_group)
  {
    if($mission != MT_AKS)
    {
      return ATTACK_WRONG_MISSION;
    };

    $acs = doquery("SELECT * FROM {{aks}} WHERE id = '{$fleet_group}' LIMIT 1;", '', true);
    if (!$acs['id'])
    {
      return ATTACK_NO_ACS;
    }

    if ($planet_dst['galaxy'] != $acs['galaxy'] || $planet_dst['system'] != $acs['system'] || $planet_dst['planet'] != $acs['planet'] || $planet_dst['planet_type'] != $acs['planet_type'])
    {
      return ATTACK_ACS_WRONG_TARGET;
    }

    if ($fleet_start_time>$acs['ankunft'])
    {
      return ATTACK_ACS_TOO_LATE;
    }
  }

  $flying_fleets = $options['flying_fleets'];
  if(!$flying_fleets)
  {
    $flying_fleets = doquery("SELECT COUNT(fleet_id) AS `flying_fleets` FROM {{fleets}} WHERE `fleet_owner` = '{$user['id']}';", '', true);
    $flying_fleets = $flying_fleets['flying_fleets'];
  }
  if(GetMaxFleets($user) <= $flying_fleets && $mission != MT_MISSILE)
  {
    return ATTACK_NO_SLOTS;
  }

  // Checking for no planet
  if(!$planet_dst['id_owner'])
  {
    if($mission == MT_COLONIZE && !$fleet[SHIP_COLONIZER])
    {
      return ATTACK_NO_COLONIZER;
    }

    if($mission == MT_EXPLORE || $mission == MT_COLONIZE)
    {
      return ATTACK_ALLOWED;
    }
    return ATTACK_NO_TARGET;
  }

  if($mission == MT_RECYCLE)
  {
    if($planet_dst['debris_metal'] + $planet_dst['debris_crystal'] <= 0)
    {
      return ATTACK_NO_DEBRIS;
    }

    if($fleet[SHIP_RECYCLER] <= 0)
    {
      return ATTACK_NO_RECYCLERS;
    }

    return ATTACK_ALLOWED;
  }

  // Got planet. Checking if it is ours
  if($planet_dst['id_owner'] == $user['id'])
  {
    if($mission == MT_TRANSPORT || $mission == MT_RELOCATE)
    {
      return ATTACK_ALLOWED;
    }
    return $planet_src['id'] == $planet_dst['id'] ? ATTACK_SAME : ATTACK_OWN;
  }

  // No, planet not ours. Cutting mission that can't be send to not-ours planet
  if($mission == MT_RELOCATE || $mission == MT_COLONIZE || $mission == MT_EXPLORE)
  {
    return ATTACK_WRONG_MISSION;
  }

  $enemy = doquery("SELECT * FROM {{users}} WHERE `id` = '{$planet_dst['id_owner']}' LIMIT 1;", '', true);
  // We cannot attack or send resource to users in VACATION mode
  if ($enemy['vacation'] && $mission != MT_RECYCLE)
  {
    return ATTACK_VACATION;
  }

  // Multi IP protection. Here we need a procedure to check proxies
  if(sys_is_multiaccount($user, $enemy))
  {
    return ATTACK_SAME_IP;
  }

  $user_points = $user['total_points'];
  $enemy_points = $enemy['total_points'];

  // Is it transport? If yes - checking for buffing to prevent mega-alliance destroyer
  if($mission == MT_TRANSPORT)
  {
    if($user_points >= $enemy_points || $config->allow_buffing)
    {
      return ATTACK_ALLOWED;
    }
    else
    {
      return ATTACK_BUFFING;
    }
  }

  // Only aggresive missions passed to this point. HOLD counts as passive but aggresive

  // Is it admin with planet protection?
  if($planet_dst['id_level'] > $user['authlevel'])
  {
    return ATTACK_ADMIN;
  }

  // Okay. Now skipping protection checks for inactive longer then 1 week
  if(!$enemy['onlinetime'] || $enemy['onlinetime'] >= ($time_now - 60*60*24*7))
  {
    if(
      ($enemy_points <= $config->game_noob_points && $user_points > $config->game_noob_points)
      ||
      ($config->game_noob_factor && $user_points > $enemy_points * $config->game_noob_factor)
    )
    {
      if($mission != MT_HOLD)
      {
        return ATTACK_NOOB;
      }
      if($mission == MT_HOLD && !($user['ally_id'] && $user['ally_id'] == $enemy['ally_id'] && $config->ally_help_weak))
      {
        return ATTACK_NOOB;
      }
    }
  }

  // Is it HOLD mission? If yes - there should be ally deposit
  if($mission == MT_HOLD)
  {
    if($planet_dst[$sn_data[STRUC_ALLY_DEPOSIT]['name']])
    {
      return ATTACK_ALLOWED;
    }
    return ATTACK_NO_ALLY_DEPOSIT;
  }

  if($mission == MT_SPY)
  {
    if($fleet[SHIP_SPY] >= 1)
    {
      return ATTACK_ALLOWED;
    }
    return ATTACK_NO_SPIES;
  }

  // Is it MISSILE mission?
  if($mission == MT_MISSILE)
  {
    if($planet_src[$sn_data[STRUC_SILO]['name']] < $sn_data[503]['require'][STRUC_SILO])
    {
      return ATTACK_NO_SILO;
    }

    if(!$fleet[503])
    {
      return ATTACK_NO_MISSILE;
    }

    $distance = abs($planet_dst['system'] - $planet_src['system']);
    $mip_range = flt_get_missile_range($user);
    if($distance > $mip_range || $planet_dst['galaxy'] != $planet_src['galaxy'])
    {
      return ATTACK_MISSILE_TOO_FAR;
    }
  }

  if($mission == MT_DESTROY && $planet_dst['planet_type'] != PT_MOON)
  {
    return ATTACK_WRONG_MISSION;
  }

  if($mission == MT_ATTACK || $mission == MT_AKS || $mission == MT_DESTROY)
  {
    return flt_bashing_check($user, $enemy, $planet_dst, $mission, $travel_data['duration'], $fleet_group);
  }

  return ATTACK_ALLOWED;
}

/*
$user - actual user record
$from - actual planet record
$to - actual planet record
$fleet - array of records $unit_id -> $amount
$mission - fleet mission
*/

function flt_t_send_fleet($user, &$from, $to, $fleet, $mission, $options = array())
{
//ini_set('error_reporting', E_ALL);

  //doquery('SET autocommit = 0;');
  //doquery('LOCK TABLES {{users}} READ, {{planets}} WRITE, {{fleet}} WRITE, {{aks}} WRITE, {{statpoints}} READ;');
  doquery('START TRANSACTION;');

  $from = sys_o_get_updated($user, $from['id'], $GLOBALS['time_now']);
  $from = $from['planet'];

  $can_attack = flt_can_attack($from, $to, $fleet, $mission, $options);
  if($can_attack != ATTACK_ALLOWED)
  {
    doquery('ROLLBACK');
    return $can_attack;
  }

  global $time_now, $sn_data;

  $fleet_group = isset($options['fleet_group']) ? floatval($options['fleet_group']) : 0;

  $travel_data  = flt_travel_data($user, $from, $to, $fleet, $options['fleet_speed_percent']);

  $fleet_start_time = $time_now + $travel_data['duration'];

  if ($mission == MT_EXPLORE OR $mission == MT_HOLD)
  {
    $stay_duration = $options['stay_time'] * 3600;
    $stay_time     = $fleet_start_time + $stay_duration;
  }
  else
  {
    $stay_duration = 0;
    $stay_time     = 0;
  }
  $fleet_end_time = $fleet_start_time + $travel_data['duration'] + $stay_duration;

  $fleet_ship_count  = 0;
  $fleet_string      = '';
  $planet_sub_query  = '';
  foreach ($fleet as $unit_id => $amount)
  {
    if(!$amount || !$unit_id)
    {
      continue;
    }

    if(in_array($unit_id, $sn_data['groups']['fleet']))
    {
      $fleet_ship_count += $amount;
      $fleet_string     .= "{$unit_id},{$amount};";
    }
    $planet_sub_query .= "`{$sn_data[$unit_id]['name']}` = `{$sn_data[$unit_id]['name']}` - {$amount},";
  }

  $to['id_owner'] = intval($to['id_owner']);

  $QryInsertFleet  = "INSERT INTO {{fleets}} SET ";
  $QryInsertFleet .= "`fleet_owner` = '{$user['id']}', ";
  $QryInsertFleet .= "`fleet_mission` = '{$mission}', ";
  $QryInsertFleet .= "`fleet_amount` = '{$fleet_ship_count}', ";
  $QryInsertFleet .= "`fleet_array` = '{$fleet_string}', ";
  $QryInsertFleet .= "`fleet_start_time` = '{$fleet_start_time}', ";
  $QryInsertFleet .= "`fleet_start_galaxy` = '{$from['galaxy']}', ";
  $QryInsertFleet .= "`fleet_start_system` = '{$from['system']}', ";
  $QryInsertFleet .= "`fleet_start_planet` = '{$from['planet']}', ";
  $QryInsertFleet .= "`fleet_start_type` = '{$from['planet_type']}', ";
  $QryInsertFleet .= "`fleet_end_time` = '{$fleet_end_time}', ";
  $QryInsertFleet .= "`fleet_end_stay` = '{$stay_time}', ";
  $QryInsertFleet .= "`fleet_end_galaxy` = '{$to['galaxy']}', ";
  $QryInsertFleet .= "`fleet_end_system` = '{$to['system']}', ";
  $QryInsertFleet .= "`fleet_end_planet` = '{$to['planet']}', ";
  $QryInsertFleet .= "`fleet_end_type` = '{$to['planet_type']}', ";
  $QryInsertFleet .= "`fleet_resource_metal` = " . floatval($fleet[RES_METAL]) . ", ";
  $QryInsertFleet .= "`fleet_resource_crystal` = " . floatval($fleet[RES_CRYSTAL]) . ", ";
  $QryInsertFleet .= "`fleet_resource_deuterium` = " . floatval($fleet[RES_DEUTERIUM]) . ", ";
  $QryInsertFleet .= "`fleet_target_owner` = '{$to['id_owner']}', ";
  $QryInsertFleet .= "`fleet_group` = '{$fleet_group}', ";
  $QryInsertFleet .= "`start_time` = '{$time_now}';";
  doquery( $QryInsertFleet);

  $QryUpdatePlanet  = "UPDATE {{planets}} SET {$planet_sub_query} `deuterium` = `deuterium` - '{$travel_data['consumption']}' WHERE `id` = '{$from['id']}' LIMIT 1;";
  doquery ($QryUpdatePlanet);

  if(BE_DEBUG)
  {
    debug($QryInsertFleet);
    debug($QryUpdatePlanet);
  }

  doquery("COMMIT;");
  // doquery('SET autocommit = 1;');
  $from = doquery ("SELECT * FROM {{planets}} WHERE `id` = '{$from['id']}' LIMIT 1;", '', true);

  return ATTACK_ALLOWED;
//ini_set('error_reporting', E_ALL ^ E_NOTICE);
}

function flt_server_flight_speed_multiplier()
{
  return $GLOBALS['config']->fleet_speed;
}

?>
