<?php
function BE_DEBUG_openTable()
{
  if (!defined('BE_DEBUG') || BE_DEBUG !== true){
    return;
  }

  global $be_debug_array;

  $be_debug_array = array();

  $print_data = '<table border=1>'.'<tr>'.
    '<th>R</th>'.
    '<th>Att</th>'.
    '<th>Dmg</th>'.
    '<th>Spd</th>'.
    '<th>Def</th>'.
    '<th>ShieldTotal</th>'.
    '<th>Harm%</th>'.
    '<th>Harm</th>'.
    '<th>Amplify</th>'.
    '<th>FinalHarm</th>'.
    '<th>Passed</th>'.
    '<th>Def/pcs</th>'.
    '<th>Destroyed</th>'.
    '<th>Left</th>'.
  '</tr>';

//  print($print_data);
  $be_debug_array[] = $print_data;
}

function BE_DEBUG_openRow($round, $defenseShipID, $defenseShipData, $element, $attackArray, $fleetID, $HarmPctIncoming, $HarmMade, $FinalHarm, $amount)
{
  if (!defined('BE_DEBUG') || BE_DEBUG !== true){
    return;
  }

  global $CombatCaps;
  global $be_debug_array;

  $SN = array(202 => '����', 203 => '����', 201 => '����', 204 => '����', 205 => '����', 206 => '����', 207 => '����', 208 => '����',
    209 => '����', 210 => '����', 211 => '����', 212 => '����', 213 => '����', 214 => '����', 215 => '����', 216 => '����',
    401 => '����', 402 => '����', 403 => '����', 404 => '����', 405 => '����', 406 => '����', 407 => '����', 408 => '����', 409 => '����');

  $print_data = '<tr>'.
    '<td>'.$round.'</td>'.
    '<td>'.$SN[$defenseShipID].'</td>'.
    '<td>'.$defenseShipData['att'].'</td>'.
    '<td>'.$CombatCaps[$defenseShipID]['sd'][$element].'</td>'.
    '<td>'.$SN[$element].'</td>'.
    '<td>'.$attackArray[$fleetID][$element]['shield'].'</td>'.
    '<td>'.round($HarmPctIncoming,3).'</td>'.
  //  '<td>'.round($PctHarmFromThisShip,3).'</td>'.
  //  '<td>'.round($PctHarmMade,3).'</td>'.
    '<td>'.$HarmMade.'</td>'.
    '<td>'.$CombatCaps[$defenseShipID]['amplify'][$element].'</td>'.
    '<td>'.$FinalHarm.'</td>'.
  // '<td>'.$CombatCaps[$defenseShipID]['amplify'][$element].' '.$defenseShipID.' '.$element.''.'</td>'.
    '<td>'.($FinalHarm-$attackArray[$fleetID][$element]['shield']).'</td>'.
    '<td>'.round($attackArray[$fleetID][$element]['def'] / $amount).'</td>'.
  '';

//  print($print_data);
  $be_debug_array[] = $print_data;
}

function BE_DEBUG_closeRow($calculatedDestroyedShip, $fleet_n)
{
  if (!defined('BE_DEBUG') || BE_DEBUG !== true){
    return;
  }

  global $be_debug_array;

  $print_data = ''.
    '<td>'.$calculatedDestroyedShip.'</td>'.
    '<td>'.$fleet_n.'</td>'.
  ''.'</tr>';

//  print($print_data);
  $be_debug_array[] = $print_data;
}

function BE_DEBUG_closeTable()
{
  if (!defined('BE_DEBUG') || BE_DEBUG !== true){
    return;
  }

  global $be_debug_array;

  $print_data = '</table>';

//  print($print_data);
  $be_debug_array[] = $print_data;
}

?>