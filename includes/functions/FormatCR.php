<?php

  /**
   * formatCR.php by Anthony (MadnessRed) [http://madnessred.co.cc/]
   *
   * Copyright (c) MadnessRed 2008.
   *
   * made from Scratch by MadnessRed to work with the ACS Combat engine.
   *
   * The files (below line 15) is under the GPL liscence, and the file license.txt must be included with this file.
   *
   * You may not edit this comment block. You may not copy any part of this file into any other file with out copying this comment block with it and placing it above any code there might be.
  */

  /*
    Partial Copyright (c) Gorlum 2010
    Rewrite and optimization by Gorlum for http://ogame.triolan.com.ua
  */

function formatCR_Fleet(&$dataInc, $isAttacker, $isLastRound){
  if ($isAttacker){
    $dataA = $dataInc['attackers'];
    $dataB = $dataInc['infoA'];
    $strField = 'detail';
    $strType = '���������';
  }else{
    $dataA = $dataInc['defenders'];
    $dataB = $dataInc['infoD'];
    $strField = 'def';
    $strType = '�������������';
    $Coord = $dataInc['defCoord'];
  };

  foreach( $dataA as $fleet_id => $data2){ //25
    //Player Info
    $weap = ($data2['user']['military_tech'] * 10);
    $shie = ($data2['user']['shield_tech'] * 10);
    $armr = ($data2['user']['defence_tech'] * 10);

    //And html output player info
    $fl_info1  = "<table><tr><th>";

    if($isAttacker){
      $Coord = "[".
        intval($data2['fleet']['fleet_start_galaxy']).":".
        intval($data2['fleet']['fleet_start_system']).":".
        intval($data2['fleet']['fleet_start_planet'])."]";
    }

    $fl_info1 .= $strType . " ".$data2['user']['username']." (".$Coord.")<br />";
/*
    $fl_info1 .= $strType . " ".$data2['user']['username']." ([".
      intval($data2['fleet']['fleet_'.$strPoint.'_galaxy']).":".
      intval($data2['fleet']['fleet_'.$strPoint.'_system']).":".
      intval($data2['fleet']['fleet_'.$strPoint.'_planet'])."])<br />";
*/
    $fl_info1 .= "������: ".$weap."% ����: ".$shie."% �����: ".$armr."%";

    //Start the table rows.
    $ships1  = "<tr><th>��� �������</th>";
    $count1  = "<tr><th>���-��</th>";
    $weap1  = "<tr><th>������</th>";
    $shields1  = "<tr><th>����</th>";
    $armour1  = "<tr><th>�����</th>";

    //And now the data columns "foreach" ship
    foreach( $data2[$strField] as $ship_id => $ship_count1){
      if ($ship_count1 > 0){
        $ships1 .= "<th>[ship[".$ship_id."]]</th>";
        $count1 .= "<th>".$ship_count1."</th>";

        if (!$isLastRound) {
          $ship_points = $dataB[$fleet_id][$ship_id];
          if ($ship_points['def'] > 0){
            $weap1 .= "<th>".$ship_points['att']."</th>";
            $shields1 .= "<th>".$ship_points['shield']."</th>";
            $armour1 .= "<th>".$ship_points['def']."</th>";
          }
        }
      }
    }

    //End the table Rows
    $ships1 .= "</tr>";
    $count1 .= "</tr>";
    $weap1 .= "</tr>";
    $shields1 .= "</tr>";
    $armour1 .= "</tr>";

    //now compile what we have, ok its the first half but the rest comes later.
    $html .= $fl_info1;
    $html .= "<table border=1 align=\"center\">";
    $html .= $ships1.$count1;
    if (!$isLastRound)
      $html .= $weap1.$shields1.$armour1;
    $html .= "</table></th></tr></table><br />";
  }
  return $html;
};

function formatCR (&$result_array,&$steal_array,&$moon_int,$moon_string,&$time_float) {

  global $phpEx, $ugamela_root_path, $pricelist, $lang, $resource, $CombatCaps, $game_config;

  $html = "";
  $bbc = "";

  //And lets start the CR. And admin message like asking them to give the cr. Nope, well moving on give the time and date ect.
  $html .= "����� ���������� ����������� ".date("d-m-Y H:i:s")."<br /><br />";

  $data = $result_array['rw'][0]['attackers'];
  $dataKey = array_keys($data);
  $data = $data[$dataKey[0]]['fleet'];
  $defenderCoord = "[".intval($data['fleet_end_galaxy']).":".intval($data['fleet_end_system']).":".intval($data['fleet_end_planet']."]");

  $rw_count = count($result_array['rw']);
  for ($round_no = 1; $round_no <= $rw_count; $round_no++) {
    $isLastRound = ($round_no == $rw_count);
    if ($isLastRound){
      $html .= "��������� ���:<br /><br />";
    }else{
      $html .= "����� ".$round_no.":<br /><br />";
    };

    //Now whats that attackers and defenders data
    $data = $result_array['rw'][$round_no-1];
    $data['defCoord'] = $defenderCoord;

    $html .= formatCR_Fleet($data, true, $isLastRound);
    $html .= formatCR_Fleet($data, false, $isLastRound);

    //HTML What happens?
    if (!$isLastRound){
      $html .= "��������� ������ �������� ����� ��������� ".$data['attack']['total'].". ���� �������������� ��������� ".$data['defShield']." ���������.<br />";
      $html .= "������������� ������ �������� ����� ��������� ".$data['defense']['total'].". ���� ���������� ��������� ".$data['attackShield']." ���������.<br /><br /><br />";
    }
  }

  //ok, end of rounds, battle results now.

  //Who won?
  if ($result_array['won'] == 2){
    //Defender wins
    $result1  = "������������� ������� �����!<br />";
  }elseif ($result_array['won'] == 1){
    //Attacker wins
    $result1  = "��������� ������� �����!<br />";
    $result1 .= "�� �������� ".$steal_array['metal']." �������, ".$steal_array['crystal']." ����������, and ".$steal_array['deuterium']." ��������<br />";
  }else{
    //Battle was a draw
    $result1  = "��� ���������� ������.<br />";
  }



  //$html .= "<br /><br />";
  $html .= $result1;
  $html .= "<br />";

  $debirs_meta = ($result_array['debree']['att'][0] + $result_array['debree']['def'][0]);
  $debirs_crys = ($result_array['debree']['att'][1] + $result_array['debree']['def'][1]);
  $html .= "��������� ������� ".$result_array['lost']['att']." ������.<br />";
  $html .= "������������� ������� ".$result_array['lost']['def']." ������.<br />";
  $html .= "������ �� ���� ���������������� ����������� ��������� ".$debirs_meta." ������� � ".$debirs_crys." ����������.<br /><br />";

  $html .= "���� ��������� ���� ���������� ".$moon_int."%<br />";
  $html .= $moon_string."<br /><br />";

  $html .= "����� ��������� �������� ".$time_float." ������<br />";

  //return array('html' => $html, 'bbc' => $bbc, 'extra' => $extra);
  return array('html' => $html, 'bbc' => $bbc);
}
?>