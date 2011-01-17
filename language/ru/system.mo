<?php

// System-wide localization

$lang['user_level'] = array (
	'0' => '�����',
	'1' => '���������',
	'2' => '��������',
	'3' => '�������������',
);

foreach($lang['user_level'] as $ID => $levelName)
{
  $lang['user_level_shortcut'][$ID] = $levelName[0];
}


$lang['VacationMode']			= "���� ������������ �������, ��� ��� �� � �������";
$lang['sys_moon_destruction_report'] = "������ ���������� ����";
$lang['sys_moon_destroyed'] = "���� ����� ������ ��������� ������ �������������� �����, ������� ��������� ����! ";
$lang['sys_rips_destroyed'] = "���� ����� ������ ��������� ������ �������������� �����, �� � �������� ��������� �� ���������� ��� ����������� ���� ������ �������. �� �������������� ����� ���������� �� ������ ����������� � ��������� ��� ����.";
$lang['sys_rips_come_back'] = "���� ����� ������ �� ����� ���������� �������, ���� ������� ����� ���� ����. ��� ���� ������������ �� ��������� ����.";
$lang['sys_chance_moon_destroy'] = "��������� ������� �����������: ";
$lang['sys_chance_rips_destroy'] = "��������� ���������� �����������: ";

$lang['sys_day'] = "����";
$lang['sys_hrs'] = "�����";
$lang['sys_min'] = "�����";
$lang['sys_sec'] = "������";

$lang['sys_day_short'] = "�";
$lang['sys_hrs_short'] = "�";
$lang['sys_min_short'] = "�";
$lang['sys_sec_short'] = "�";

$lang['sys_ask_admin'] = '������� � ����������� ���������� �� ������';
$lang['TranslationBy'] = '';

$lang['sys_wait'] = '������ �����������. ����������, ���������.';

$lang['sys_total']           = "�����";
$lang['sys_register_date']   = '���� �����������';

$lang['sys_attacker'] 		= "���������";
$lang['sys_defender'] 		= "�������������";

$lang['COE_combatSimulator'] = "��������� ���";
$lang['COE_simulate']        = "������ ����������";
$lang['COE_fleet']           = "����";
$lang['COE_defense']         = "�������";
$lang['sys_resources']       = "�������";
$lang['sys_ships']           = "�������";

$lang['sys_metal']          = "������";
$lang['sys_metal_sh']       = "�";
$lang['sys_crystal']        = "��������";
$lang['sys_crystal_sh']     = "�";
$lang['sys_deuterium']      = "�������";
$lang['sys_deuterium_sh']   = "�";
$lang['sys_energy']         = "�������";
$lang['sys_energy_sh']      = "�";
$lang['sys_dark_matter']    = "������ �������";
$lang['sys_dark_matter_sh'] = "��";

$lang['sys_resource'] = array(
  1 => $lang['sys_metal'],
  2 => $lang['sys_crystal'],
  3 => $lang['sys_deuterium'],
  4 => $lang['sys_dark_matter'],
  5 => $lang['sys_energy'],
);

$lang['sys_reset']           = "��������";
$lang['sys_send']            = "���������";
$lang['sys_characters']      = "��������";
$lang['sys_back']            = "�����";
$lang['sys_return']          = "���������";
$lang['sys_delete']          = "�������";
$lang['sys_writeMessage']    = "�������� ���������";
$lang['sys_hint']            = "���������";

$lang['sys_alliance']        = "������";
$lang['sys_player']          = "�����";
$lang['sys_coordinates']     = "����������";

$lang['sys_online']          = "������";
$lang['sys_offline']         = "�������";
$lang['sys_lessThen15min']   = '&lt; 15 �';
$lang['sys_status']          = "������";

$lang['sys_universe']        = "���������";
$lang['sys_goto']            = "�������";

$lang['sys_time']            = "�����";

$lang['sys_no_task']         = "��� �������";

$lang['sys_affilates']       = "������������ ������";

$lang['sys_fleet_arrived']   = "���� ������";

$lang['sys_planet_type1']    = "�������";
$lang['sys_planet_type2'] 	  = "���� ��������";
$lang['sys_planet_type3']    = "����";

$lang['sys_planet_type'] = array(
  PT_PLANET => $lang['sys_planet_type1'], 
  2 => $lang['sys_planet_type2'], 
  PT_MOON => $lang['sys_planet_type3']
);

$lang['sys_planet_type_sh1'] = "(�)";
$lang['sys_planet_type_sh2'] = "(�)";
$lang['sys_planet_type_sh3'] = "(�)";

$lang['sys_planet_type_sh'] = array(
  1 => $lang['sys_planet_type_sh1'], 
  2 => $lang['sys_planet_type_sh2'], 
  3 => $lang['sys_planet_type_sh3']
);

$lang['sys_capacity'] 			= '����������������';

$lang['sys_supernova'] 			= '����������';
$lang['sys_server'] 			= '������';


// Resource page
$lang['res_planet_production'] = '������������ �������� �� �������';
$lang['res_basic_income'] = '������������ ������������';
$lang['res_total'] = '�����';
$lang['res_calculate'] = '����������';
$lang['res_daily'] = '�� ����';
$lang['res_weekly'] = '�� ������';
$lang['res_monthly'] = '�� �����';
$lang['res_storage_fill'] = '������������� ���������';
$lang['res_hint'] = '<ul><li>������������ �������� <100% �������� �������� �������. ��������� �������������� �������������� ��� ��������� ������������ ��������<li>���� ���� ������������ ����� 0% ������ ����� �� ����� �� ������� � ��� ����� �������� ��� ������<li>��� �� ��������� ������ ��� ���� ������� ����� ����������� ����-���� � �������� �������. �������� ������ ������������ ��� ����� ������ �� �������</ul>';

// Build page
$lang['bld_destroy'] = '����������';
$lang['bld_create']  = '���������';

// Imperium page
$lang['imp_imperator'] = "���������";
$lang['imp_overview'] = "����� �������";
$lang['imp_production'] = "������������";
$lang['imp_name'] = "��������";
$lang['sys_fields'] = "�������";

// Cookies
$lang['err_cookie'] = "������! ���������� �������������� ������������ �� ���������� � cookie. <a href='login.{$phpEx}'>�������</a> � ���� ��� <a href='reg.{$phpEx}'>�����������������</a>.";

// Supported languages
$lang['ru']              	  = '�������';
$lang['en']              	  = '����������';

$lang['sys_vacancy']         = '�� �� � �������!';
$lang['sys_level']           = '�������';

$lang['sys_yes']             = '��';
$lang['sys_no']              = '���';

$lang['sys_on']              = '�������';
$lang['sys_off']             = '��������';

$lang['sys_game_mode'][0]    = '����������';
$lang['sys_game_mode'][1]    = '�����';

// top bar
$lang['top_of_year'] = '����';
$lang['top_online']			= '������ on-line';

$lang['months'] = array(
	'01'=>'������',
	'02'=>'�������',
	'03'=>'�����',
	'04'=>'������',
	'05'=>'���',
	'06'=>'����',
	'07'=>'����',
	'08'=>'�������',
	'09'=>'��������',
	'10'=>'�������',
	'11'=>'������',
	'12'=>'�������'
);

$lang['weekdays'] = array(
	'0' => '�����������',
	'1' => '�����������',
	'2' => '�������',
	'3' => '�����',
	'4' => '�������',
	'5' => '�������',
	'6' => '�������'
);

$lang = array_merge($lang, array(
  'sys_first_round_crash_1'	=> '������� � ����������� ������ �������.',
  'sys_first_round_crash_2'	=> '��� �������� ��� �� ��� ��������� � ������ ������ ���.',

  'sys_ques' => array(
    QUE_STRUCTURES => '������',
    QUE_HANGAR     => '�����',
    QUE_RESEARCH   => '������������',
  ),

  'eco_que_empty' => '������� �����',
  'eco_que_clear' => '�������� �������',
  'eco_que_trim'  => '�������� ���������',

  'sys_overview'			=> '�����',
  'mod_marchand'			=> '��������',
  'sys_moon'			=> '����',
  'sys_planet'			=> '�������',
  'sys_error'			=> '������',
  'sys_done'				=> '������',
  'sys_no_vars'			=> '������ ������������� ����������, ���������� � �������������!',
  'sys_attacker_lostunits'		=> '��������� ������� %s ������.',
  'sys_defender_lostunits'		=> '������������� ������� %s ������.',
  'sys_gcdrunits' 			=> '������ �� ���� ���������������� ����������� ��������� %s %s � %s %s.',
  'sys_moonproba' 			=> '���� ��������� ���� ����������: %d %% ',
  'sys_moonbuilt' 			=> '��������� �������� ������� �������� ����� ������� � ��������� ����������� � ���������� ����� ���� %s [%d:%d:%d] !',
  'sys_attack_title'    		=> '%s. ��������� ��� ����� ���������� �������::',
  'sys_attack_attacker_pos'      	=> '��������� %s [%s:%s:%s]',
  'sys_attack_techologies' 	=> '����������: %d %% ����: %d %% �����: %d %% ',
  'sys_attack_defender_pos' 	=> '������������� %s [%s:%s:%s]',
  'sys_ship_type' 			=> '���',
  'sys_ship_count' 		=> '���-��',
  'sys_ship_weapon' 		=> '����������',
  'sys_ship_shield' 		=> '����',
  'sys_ship_armour' 		=> '�����',
  'sys_destroyed' 			=> '���������',
  'sys_attack_attack_wave' 	=> '��������� ������ �������� ����� ��������� %s �� ��������������. ���� �������������� ��������� %s ���������.',
  'sys_attack_defend_wave'		=> '������������� ������ �������� ����� ��������� %s �� ����������. ���� ���������� ��������� %s ���������.',
  'sys_attacker_won' 		=> '��������� ������� �����!',
  'sys_defender_won' 		=> '������������� ������� �����!',
  'sys_both_won' 			=> '��� ���������� ������!',
  'sys_stealed_ressources' 	=> '�� �������� %s ������� %s %s ��������� %s � %s ��������.',
  'sys_rapport_build_time' 	=> '����� ��������� �������� %s ������',
  'sys_mess_tower' 		=> '���������',
  'sys_mess_attack_report' 	=> '������ ������',
  'sys_spy_maretials' 		=> '����� ��',
  'sys_spy_fleet' 			=> '����',
  'sys_spy_defenses' 		=> '�������',
  'sys_mess_qg' 			=> '������������ ������',
  'sys_mess_spy_report' 		=> '��������� ������',
  'sys_mess_spy_lostproba' 	=> '����������� ����������, ���������� ��������� %d %% ',
  'sys_mess_spy_control' 		=> '�������������',
  'sys_mess_spy_activity' 		=> '��������� ����������',
  'sys_mess_spy_ennemyfleet' 	=> '����� ���� � �������',
  'sys_mess_spy_seen_at'		=> '��� ��������� ����� �������',
  'sys_mess_spy_destroyed'		=> '��������� ������� ��� ���������',
  'sys_object_arrival'		=> '������ �� �������',
  'sys_stay_mess_stay' => '�������� ����',
  'sys_stay_mess_start' 		=> '��� ���� ������ �� �������',
  'sys_stay_mess_back'		=> '��� ���� �������� ',
  'sys_stay_mess_end'		=> ' � ��������:',
  'sys_stay_mess_bend'		=> ' � �������� ��������� �������:',
  'sys_adress_planet' 		=> '[%s:%s:%s]',
  'sys_stay_mess_goods' 		=> '%s : %s, %s : %s, %s : %s',
  'sys_colo_mess_from' 		=> '�����������',
  'sys_colo_mess_report' 		=> '����� � �����������',
  'sys_colo_defaultname' 		=> '�������',
  'sys_colo_arrival' 		=> '���� ��������� ��������� ',
  'sys_colo_maxcolo' 		=> ', �� �������������� ������� ������, ���������� ������������ ����� ������� ��� ������ ������ �����������',
  'sys_colo_allisok' 		=> ', � ��������� �������� ��������� ����� �������.',
  'sys_colo_badpos'  			=> ', � ��������� ����� ����� ���� �������� ��� ����� �������. ������ ����������� ������������ ������� �� ������� ��������.',
  'sys_colo_notfree' 			=> ', � ��������� �� ����� ������� � ���� �����������. ��� ��������� ��������� ������ ������� ��������� ���������������.',
  'sys_colo_planet'  		=> ' ������� ��������������!',
  'sys_expe_report' 		=> '����� ����������',
  'sys_recy_report' 		=> '��������� ����������',
  'sys_expe_blackholl_1' 		=> '��� ���� ����� � ������ ���� � �������� �������!',
  'sys_expe_blackholl_2' 		=> '��� ���� ����� � ������ ���� � ��������� �������!',
  'sys_expe_nothing_1' 		=> '��� ������������� ����� ����������� ���������� ������! � ���� ���������� ������ ������� ����� ��������������� �������.',
  'sys_expe_nothing_2' 		=> '��� ������������� ������ �� ����������!',
  'sys_expe_found_goods' 		=> '��� ������������� ����� �������, ������� ������!<br>�� �������� %s %s, %s %s � %s %s',
  'sys_expe_found_ships' 		=> '��� ������������� ����� ���������� ����� ����!<br>�� ��������: ',
  'sys_expe_back_home' 		=> '��� ���� ������������ �������.',
  'sys_mess_transport' 		=> '���������',
  'sys_tran_mess_owner' 		=> '���� �� ����� ������ ��������� ������� %s %s � ���������� %s %s, %s  %s � %s %s.',
  'sys_tran_mess_user'  		=> '��� ���� ������������ � ������� %s %s ������ �� %s %s � �������� %s %s, %s  %s � %s %s.',
  'sys_mess_fleetback' 		=> '�����������',
  'sys_tran_mess_back' 		=> '���� �� ����� ������ ������������ �� ������� %s %s.',
  'sys_recy_gotten' 		=> '���� �� ����� ������ ����� %s %s � %s %s ������������ �� �������.',
  'sys_notenough_money' 		=> '��� �� ������� ��������, ����� ���������: %s. � ��� ������: %s %s , %s %s � %s %s. ��� ������������� ����������: %s %s , %s %s � %s %s.',
  'sys_nomore_level'		=> '�� ������ �� ������ ���������������� ���. ��� �������� ����. ������ ( %s ).',
  'sys_buildlist' 			=> '������ ��������',
  'sys_buildlist_fail' 		=> '��� ��������',
  'sys_gain' 			=> '������: ',
  'sys_perte_attaquant' 		=> '��������� �������',
  'sys_perte_defenseur' 		=> '������������� �������',
  'sys_debris' 			=> '�������: ',
  'sys_noaccess' 			=> '� ������� ��������',
  'sys_noalloaw' 			=> '��� ������ ������ � ��� ����!',
  'sys_governor'        => '����������',

  // News page & a bit of imperator page
  'news_title'     => '�������',
  'news_none'      => '��� ��������',
  'news_new'       => '�����',
  'news_future'    => '�����',
  'news_more'      => '���������...',

  'news_date'      => '����',
  'news_announce'  => '����������',
  'news_total'     => '����� ��������: ',

  'news_add'       => '�������� �������',
  'news_edit'      => '������������� �������',
  'news_copy'      => '����������� �������',
  'news_mode_new'  => '�����',
  'news_mode_edit' => '��������������',
  'news_mode_copy' => '�����',

  // Missile-related
  'mip_h_launched'			=> '������ ������������ �����',
  'mip_launched'				=> '�������� ������������ �����: <b>%s</b>!',

  'mip_no_silo'				=> '������������ ������� �������� ���� �� ������� <b>%s</b>.',
  'mip_no_impulse'			=> '���������� ����������� ���������� ���������.',
  'mip_too_far'				=> '������ �� ����� ������ ��� ������.',
  'mip_planet_error'			=> '������ - ������ ����� ������� �� ����� ����������',
  'mip_no_rocket'				=> '������������ ����� � ����� ��� ���������� �����.',
  'mip_hack_attempt'			=> ' �� �� �����? ��� ���� ����� ������ � ������ �������. ip ����� � ����� � �������.',

  'mip_all_destroyed' 		=> '��� ������������ ������ ���� ���������� ��������-��������������<br>',
  'mip_destroyed'				=> '%s ����������� ����� ���� ���������� ��������-��������������.<br>',
  'mip_defense_destroyed'	=> '���������� ��������� �������������� ����������:<br />',
  'mip_recycled'				=> '������������ �� �������� �������� ����������: ',
  'mip_no_defense'			=> '�� ��������� ������� �� ���� ������!',

  'mip_sender_amd'			=> '�������-����������� ������',
  'mip_subject_amd'			=> '�������� �����',
  'mip_body_attack'			=> '����� ������������� �������� (%1$s ��.) � ������� %2$s <a href="galaxy.php?mode=3&galaxy=%3$d&system=%4$d&planet=%5$d">[%3$d:%4$d:%5$d]</a> �� ������� %6$s <a href="galaxy.php?mode=3&galaxy=%7$d&system=%8$d&planet=%9$d">[%7$d:%8$d:%9$d]</a><br><br>',
  
  // Misc
  'sys_game_rules' => '������� ����',
  'sys_max' => '����',
  'sys_banned_msg' => '�� ��������. ��� ��������� ���������� ������� <a href="banned.php">����</a>. ���� ��������� ���������� ��������: ',
  'sys_total_time' => '����� �����',

  // Univers
  'uni_moon_of_planet' => '�������',

  // Dark Matter
  'sys_dark_matter_get'  => '������ ��',
  'sys_dark_matter_text' => '<h2>��� ����� ������ �������?</h2>
    ������ ������� - ��� ������� ������, �� ���� ������� � ���� �� ������ ��������� ��������� ��������:
    <ul><li>���������� ���� ��� �������� �� ������</li>
    <li>�������� �������� �����</li>
    <li>������� �������� �/� ��������</li>
    <li>�������� ��������</li></ul>
    <h2>��� ����� ������ �������?</h2>
    �� ��������� ������ ������� � �������� ����: ������� ���� �� ����� �� ����� ������� � ��������� ������.
    ��� �� ������ ����������������� ���������� ����� �������� ��.<br>
    ����� ���� �� ������ ���������� �� �� WebMoney. ��������� - ��.',

  // Officers
  'off_no_points'        => '� ��� ������������ ����� �������!',
  'off_recruited'        => '������ ��� �����! <a href="officer.php">�����</a>',
  'off_tx_lvl'           => '������� �������: ',
  'off_points'           => '�������� ����� �������: ',
  'off_maxed_out'        => '������������ �������',
  'off_not_available'    => '������ ��� ��� �� ��������!',
  'off_hire'             => '������ ��',
  'off_dark_matter_desc' => 'Ҹ���� ������� - ������������ ������������ �������� ����������� �������, �� ������� ���������� 23% ����� ���������. �� �� ����� �������� ����������� ���������� �������. ��-�� �����, � ��� �� ��-�� ����������, ��������� � � �������, ������ ������� ������� ����� ������.',
  'off_dark_matter_hint' => '��� ������ ���� ���������� ����� ������ �������� � ����������.',

));

?>