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

$lang['sys_first_round_crash_1']	= '������� � ����������� ������ �������.';
$lang['sys_first_round_crash_2']	= '��� �������� ��� �� ��� ��������� � ������ ������ ���.';

$lang['sys_overview']			= "�����";
$lang['mod_marchand']			= "��������";
$lang['sys_moon']			= "����";
$lang['sys_planet']			= "�������";
$lang['sys_error']			= "������";
$lang['sys_no_vars']			= "������ ������������� ����������, ���������� � �������������!";
$lang['sys_attacker_lostunits']		= "��������� ������� %s ������.";
$lang['sys_defender_lostunits']		= "������������� ������� %s ������.";
$lang['sys_gcdrunits'] 			= "������ �� ���� ���������������� ����������� ��������� %s %s � %s %s.";
$lang['sys_moonproba'] 			= "���� ��������� ���� ����������: %d %% ";
$lang['sys_moonbuilt'] 			= "��������� �������� ������� �������� ����� ������� � ��������� ����������� � ���������� ����� ���� %s [%d:%d:%d] !";
$lang['sys_attack_title']    		= "%s. ��������� ��� ����� ���������� �������::";
$lang['sys_attack_attacker_pos']      	= "��������� %s [%s:%s:%s]";
$lang['sys_attack_techologies'] 	= "����������: %d %% ����: %d %% �����: %d %% ";
$lang['sys_attack_defender_pos'] 	= "������������� %s [%s:%s:%s]";
$lang['sys_ship_type'] 			= "���";
$lang['sys_ship_count'] 		= "���-��";
$lang['sys_ship_weapon'] 		= "����������";
$lang['sys_ship_shield'] 		= "����";
$lang['sys_ship_armour'] 		= "�����";
$lang['sys_destroyed'] 			= "���������";
$lang['sys_attack_attack_wave'] 	= "��������� ������ �������� ����� ��������� %s �� ��������������. ���� �������������� ��������� %s ���������.";
$lang['sys_attack_defend_wave']		= "������������� ������ �������� ����� ��������� %s �� ����������. ���� ���������� ��������� %s ���������.";
$lang['sys_attacker_won'] 		= "��������� ������� �����!";
$lang['sys_defender_won'] 		= "������������� ������� �����!";
$lang['sys_both_won'] 			= "��� ���������� ������!";
$lang['sys_stealed_ressources'] 	= "�� �������� %s ������� %s %s ��������� %s � %s ��������.";
$lang['sys_rapport_build_time'] 	= "����� ��������� �������� %s ������";
$lang['sys_mess_tower'] 		= "���������";
$lang['sys_mess_attack_report'] 	= "������ ������";
$lang['sys_spy_maretials'] 		= "����� ��";
$lang['sys_spy_fleet'] 			= "����";
$lang['sys_spy_defenses'] 		= "�������";
$lang['sys_mess_qg'] 			= "������������ ������";
$lang['sys_mess_spy_report'] 		= "��������� ������";
$lang['sys_mess_spy_lostproba'] 	= "����������� ����������, ���������� ��������� %d %% ";
$lang['sys_mess_spy_control'] 		= "�������������";
$lang['sys_mess_spy_activity'] 		= "��������� ����������";
$lang['sys_mess_spy_ennemyfleet'] 	= "����� ���� � �������";
$lang['sys_mess_spy_seen_at']		= "��� ��������� ����� �������";
$lang['sys_mess_spy_destroyed']		= "��������� ������� ��� ���������";
$lang['sys_object_arrival']		= "������ �� �������";
$lang['sys_stay_mess_stay'] = "�������� ����";
$lang['sys_stay_mess_start'] 		= "��� ���� ������ �� �������";
$lang['sys_stay_mess_back']		= "��� ���� �������� ";
$lang['sys_stay_mess_end']		= " � ��������:";
$lang['sys_stay_mess_bend']		= " � �������� ��������� �������:";
$lang['sys_adress_planet'] 		= "[%s:%s:%s]";
$lang['sys_stay_mess_goods'] 		= "%s : %s, %s : %s, %s : %s";
$lang['sys_colo_mess_from'] 		= "�����������";
$lang['sys_colo_mess_report'] 		= "����� � �����������";
$lang['sys_colo_defaultname'] 		= "�������";
$lang['sys_colo_arrival'] 		= "���� ��������� ��������� ";
$lang['sys_colo_maxcolo'] 		= ", �� �������������� ������� ������, ���������� ������������ ����� ������� ��� ������ ������ �����������";
$lang['sys_colo_allisok'] 		= ", � ��������� �������� ��������� ����� �������.";
$lang['sys_colo_badpos']  			= ", � ��������� ����� ����� ���� �������� ��� ����� �������. ������ ����������� ������������ ������� �� ������� ��������.";
$lang['sys_colo_notfree'] 			= ", � ��������� �� ����� ������� � ���� �����������. ��� ��������� ��������� ������ ������� ��������� ���������������.";
$lang['sys_colo_planet']  		= " ������� ��������������!";
$lang['sys_expe_report'] 		= "����� ����������";
$lang['sys_recy_report'] 		= "��������� ����������";
$lang['sys_expe_blackholl_1'] 		= "��� ���� ����� � ������ ���� � �������� �������!";
$lang['sys_expe_blackholl_2'] 		= "��� ���� ����� � ������ ���� � ��������� �������!";
$lang['sys_expe_nothing_1'] 		= "��� ������������� ����� ����������� ���������� ������! � ���� ���������� ������ ������� ����� ��������������� �������.";
$lang['sys_expe_nothing_2'] 		= "��� ������������� ������ �� ����������!";
$lang['sys_expe_found_goods'] 		= "��� ������������� ����� �������, ������� ������!<br>�� �������� %s %s, %s %s � %s %s";
$lang['sys_expe_found_ships'] 		= "��� ������������� ����� ���������� ����� ����!<br>�� ��������: ";
$lang['sys_expe_back_home'] 		= "��� ���� ������������ �������.";
$lang['sys_mess_transport'] 		= "���������";
$lang['sys_tran_mess_owner'] 		= "���� �� ����� ������ ��������� ������� %s %s � ���������� %s %s, %s  %s � %s %s.";
$lang['sys_tran_mess_user']  		= "��� ���� ������������ � ������� %s %s ������ �� %s %s � �������� %s %s, %s  %s � %s %s.";
$lang['sys_mess_fleetback'] 		= "�����������";
$lang['sys_tran_mess_back'] 		= "���� �� ����� ������ ������������ �� ������� %s %s.";
$lang['sys_recy_gotten'] 		= "���� �� ����� ������ ����� %s %s � %s %s ������������ �� �������.";
$lang['sys_notenough_money'] 		= "��� �� ������� ��������, ����� ���������: %s. � ��� ������: %s %s , %s %s � %s %s. ��� ������������� ����������: %s %s , %s %s � %s %s.";
$lang['sys_nomore_level']		= "�� ������ �� ������ ���������������� ���. ��� �������� ����. ������ ( %s ).";
$lang['sys_buildlist'] 			= "������ ��������";
$lang['sys_buildlist_fail'] 		= "��� ��������";
$lang['sys_gain'] 			= "������: ";
$lang['sys_perte_attaquant'] 		= "��������� �������";
$lang['sys_perte_defenseur'] 		= "������������� �������";
$lang['sys_debris'] 			= "�������: ";
$lang['sys_noaccess'] 			= "� ������� ��������";
$lang['sys_noalloaw'] 			= "��� ������ ������ � ��� ����!";

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

$lang['sys_ask_admin'] = ' - ��������� ������� �� ������ ������ �� ������';
$lang['TranslationBy'] = '';

$lang['sys_wait'] = '������ �����������. ����������, ���������.';

$lang['sys_affilates_title'] = "����������� ���������";
$lang['sys_affilates_text1'] = "���������� ��� ������, ������ ��� ������� �� ������ ��� ����� � ������ ��������� �� ������ ������ ����� ������������. �� ������ ";
$lang['sys_affilates_text2'] = " ��, ������������ ������������, �� �������� 1 ��!";
$lang['sys_affilate_list']   = "������ ������������";
$lang['sys_affilates_none']  = "��� ������������";
$lang['sys_total']           = "�����";
$lang['sys_link_name']       = "������ ������ � ����������� ���������";
$lang['sys_link_bb']         = "BBCode ��� ���������� ������ ������ �� ������";
$lang['sys_link_html']       = "HTML-��� ��� ���������� ������ ������ �� ���-��������";
$lang['sys_banner_name']     = "������";
$lang['sys_banner_bb']       = "BBCode ��� ���������� ������� �� ������";
$lang['sys_banner_html']     = "HTML-��� ��� ���������� ������� �� ���-��������";
$lang['sys_userbar_name']    = "�������";
$lang['sys_userbar_bb']      = "BBCode ��� ���������� �������� �� ������";
$lang['sys_userbar_html']    = "HTML-��� ��� ���������� �������� �� ���-��������";

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
  1 => $lang['sys_planet_type1'], 
  2 => $lang['sys_planet_type2'], 
  3 => $lang['sys_planet_type3']
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
$lang['res_basic_income'] = '������������� ������������';
$lang['res_total'] = '�����';
$lang['res_calculate'] = '����������';
$lang['res_daily'] = '�� ����';
$lang['res_weekly'] = '�� ������';
$lang['res_monthly'] = '�� �����';
$lang['res_storage_fill'] = '������������� ���������';
$lang['res_hint'] = '<ul><li>������������ �������� <100% �������� �������� �������. ��������� �������������� �������������� ��� ��������� ������������ ��������<li>���� ���� ������������ ����� 0% ������ ����� �� ����� �� ������� � ��� ����� �������� ��� ������<li>��� �� ��������� ������ ��� ���� ������� ����� ����������� ����-���� � �������� �������. �������� ������ ������������ ��� ����� ������ �� �������</ul>';

// Build page
$lang['bld_destroy'] = '����������';

// Imperium page
$lang['imp_imperator'] = "���������";
$lang['imp_overview'] = "����� �������";
$lang['imp_production'] = "������������";
$lang['imp_name'] = "��������";
$lang['sys_fields'] = "�������";

// Cookies
$lang['cookies']['Error1'] = '������! �������� cookie ��� ��������� �� ����! <a href=login.php>�����</a>';
$lang['cookies']['Error2'] = '������! �������� cookie ��� ��������� �� ����! <a href=login.php>�����</a>';
$lang['cookies']['Error3'] = '������! �������� cookie ��� ��������� �� ����! <a href=login.php>�����</a>';

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

$lang['sys_max'] = '����';
?>