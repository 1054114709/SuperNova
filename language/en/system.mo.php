<?php

/*
#############################################################################
#  Filename: system.mo
#  Project: SuperNova.WS
#  Website: http://www.supernova.ws
#  Description: Massive Multiplayer Online Browser Space Startegy Game
#
#  Copyright В© 2011 madmax1991 for Project "SuperNova.WS"
#  Copyright В© 2009 Gorlum for Project "SuperNova.WS"
#  Copyright В© 2008 Aleksandar Spasojevic <spalekg@gmail.com>
#  Copyright В© 2005 - 2008 KGsystem
#############################################################################
*/

/**
*
* @package language
* @system [English]
* @version 36a0.32
*
*/

/**
* DO NOT CHANGE
*/

if (!defined('INSIDE')) 
{
	die('Hack attempt!');
}

if (empty($lang) || !is_array($lang))
{
  $lang = array();
}

// System-wide localization

$lang = array_merge($lang, array(
  // Dark Matter
  'sys_dark_matter_what_header' => 'What is Dark Matter',
  'sys_dark_matter_description_header' => 'Why do you need Dark Matter',
  'sys_dark_matter_description_text' => 'Dark Matter - is ingame currency, which in the game you can make a variety of operations:
    <ul>
      <li>Buy <a href="index.php?page=premium"><span class="link">Premium account</span></a></li>
      <li>Recruit <a href="officer.php?mode=600"><span class="link">Mercenaries</span></a> for Empire</li>
      <li>Hire Governors and but additional sectors <a href="overview.php?mode=manage"><span class="link">for planets</span></a></li>
      <li>Buy <a href="officer.php?mode=1100"><span class="link">Schematics</span></a></li>
      <li>Buy <a href="artifacts.php"><span class="link">Artefacts</span></a></li>
      <li>Use <a href="market.php"><span class="link">Black Market</span></a>: exchange resources; sell ships; buy ships; buy intelligence etc</li>
      <li>...and many other things</li>
    </ul>',

  'sys_dark_matter_obtain_header' => 'How to obtain Dark Matter',
  'sys_dark_matter_obtain_text' => 'You acquring Dark Matter in game process: while gained levels for raids to enemy planets, researching technologies, building and destroying buildings.
    Also sometimes expeditions can gain you some DM.',

  'sys_dark_matter_purchase_url_description' => 'In addition you can purchase Dark Matter for WebMoney',
  'sys_dark_matter_purchase_url_get'  => 'Click here to read details.',

  'sys_dark_matter_purchase' => 'Purchase Dark Matter',
  'sys_dark_matter_purchase_text_cost' => 'Price for',
  'sys_dark_matter_purchase_text_unit' => 'is',
  'sys_dark_matter_purchase_text_end' => 'When you purchasing large amounts of Dark Matter you recieve bonuses:
    <ul>
     <li>from 100.000 DM - 10% bonus to purchased DM amount</li>
     <li>from 200.000 DM - 20% bonus to purchased DM amount</li>
     <li>from 300.000 DM - 30% bonus to purchased DM amount</li>
     <li>from 400.000 DM - 40% bonus to purchased DM amount</li>
     <li>from 500.000 DM - 50% bonus to purchased DM amount</li>
    </ul>
  ',
  'sys_dark_matter_purchase_step1' => 'Step 1',
  'sys_dark_matter_purchase_step1_text' => 'Select amount of DM you wish to purchase, select payment system and confirm your selection',
  'sys_dark_matter_purchase_amount' => 'Dark Matter amount',
  'sys_dark_matter_purchase_select' => 'Payment system',
  'sys_dark_matter_purchase_confirm' => 'Confirm selection',
  'sys_dark_matter_purchase_payment_selected' => 'Purchase would be made using payment system',

  'sys_dark_matter_purchase_step2' => 'Step 2',
  'sys_dark_matter_purchase_step2_text' => 'Verify selected amount of Dark Matter and selected payment system. If everything is OK press button "Purchase Dark Matter". If there is any error - press button "Discard and start again"',
  'sys_dark_matter_purchase_pay' => 'Purchase Dark Matter',
  'sys_dark_matter_purchase_reset' => 'Discard and start again',
  'sys_dark_matter_purchase_in_progress' => 'Payment in progress...',


  'pay_msg_request_user_found' => 'User found',

  'pay_msg_request_unsupported' => 'Unsupported request',
  'pay_msg_request_signature_invalid' => 'Wrong request signature',
  'pay_msg_request_user_invalid' => 'User ID is invalid',
  'pay_msg_request_server_wrong' => 'Wrong server',
  'pay_msg_request_payment_amount_invalid' => 'Wrong payment amount',
  'pay_msg_request_payment_id_invalid' => 'Wrong payment ID',
  'pay_msg_request_payment_date_invalid' => 'Wrong payment date',
  'pay_msg_request_internal_error' => 'Server internal error. Try again later',

  'pay_msg_request_dark_matter_amount_invalid' => 'Wrong Dark Matter amount',
  'pay_msg_request_paylink_unsupported' => 'This type of paylink is not supported. It\'s looks like you using outdated version of SuperNova which incompatible with selected payment module',

  'pay_msg_module_disabled' => 'Payment module disabled',


  'sys_administration' => 'SuperNova Administration',
  'sys_birthday' => 'Birthday',
  'sys_birthday_message' => '%1$s! SuperNova Administration warmly greats you with your birthday on %2$s and gives to you s small gift - %3$d %4$s!',

  'adm_err_denied' => 'Access denied. You do not have enough rights to use this admin page',

  'sys_empire'          => 'Empire',
  'VacationMode'			=> "Your production stopped because you are on vacation",
  'sys_moon_destruction_report' => "Report of destruction of the Moon",
  'sys_moon_destroyed' => "Your Deathstar shot a powerful gravitational wave, which destroyed the Moon! ",
  'sys_rips_destroyed' => "Your Deathstar shot a  powerful gravitational wave, but it had not enough power to destroy the Moon due to its size. But the gravitational wave reflected from the lunar surface and ruined your fleet.",
  'sys_rips_come_back' => "Your Deathstar did not have enough power to defeat this moon. Your fleet is not destroying the Moon.",
  'sys_chance_moon_destroy' => "Chance of Moon destruction: ",
  'sys_chance_rips_destroy' => "Modify burst destruction: ",

  'sys_impersonate' => 'Impersonate',
  'sys_impersonate_done' => 'Unimpersonate',
  'sys_impersonated_as' => 'WARNING! Currently you impersonating player %1$s. Don\'t forget that you are really %2$s! To unimpersonate select appropriate menu item.',

  'sys_day' => "Days",
  'sys_hrs' => "Hours",
  'sys_min' => "Minutes",
  'sys_sec' => "Seconds",
  'sys_day_short' => "D",
  'sys_hrs_short' => "H",
  'sys_min_short' => "M",
  'sys_sec_short' => "S",

  'sys_ask_admin' => 'Questions and suggestions sent to',

  'sys_wait' => 'The query is executed. Please wait.',

  'sys_fleets'       => 'Fleets',
  'sys_expeditions'  => 'Expeditions',
  'sys_fleet'        => 'fleet',
  'sys_expedition'   => 'expedition',
  'sys_event_next'   => 'Next event:',
  'sys_event_arrive' => 'will arrive',
  'sys_event_stay'   => 'will end task',
  'sys_event_return' => 'will return',

  'sys_total'           => "Total",
  'sys_need'				=> 'Need',
  'sys_register_date'   => 'Registration date',

  'sys_attacker' 		=> "Attacker",
  'sys_defender' 		=> "Defender",

  'COE_combatSimulator' => "Battle simulator",
  'COE_simulate'        => "Run the Simulator",
  'COE_fleet'           => "Fleet",
  'COE_defense'         => "Defence",
  'sys_coe_combat_start'=> "Combat begins",
  'sys_coe_combat_end'  => "Combat outcome",
  'sys_coe_round'       => "Round",

  'sys_coe_attacker_turn'=> 'Attacker make shots for %1$s. Defender\'s shield absorbs %2$s<br />',
  'sys_coe_defender_turn'=> 'Defender make shots for %1$s. Attacker\'s shield absorbs %2$s<br /><br /><br />',
  'sys_coe_outcome_win'  => 'Defender wons combat!<br />',
  'sys_coe_outcome_loss' => 'Attacker wons combat!<br />',
  'sys_coe_outcome_loot' => 'He\'s lootin %1$s metal, %2$s crystal, %3$s deuterium<br />',
  'sys_coe_outcome_draw' => 'Combat end with draw...<br />',
  'sys_coe_attacker_lost'=> 'Attacker lost %1$s units<br />',
  'sys_coe_defender_lost'=> 'Defender lost %1$s units<br />',
  'sys_coe_debris_left'  => 'There is %1$s metal and %2$s crystal floating in debris around planet.<br /><br />',
  'sys_coe_moon_chance'  => 'Moon creation chance is %1$s%%<br />',
  'sys_coe_rw_time'      => 'Reprot generated in %1$s seconds<br />',

  'sys_resources'       => "Resources",
  'sys_ships'           => "Ships",
  'sys_metal'          => "Metal",
  'sys_metal_sh'       => "M",
  'sys_crystal'        => "Crystal",
  'sys_crystal_sh'     => "C",
  'sys_deuterium'      => "Deuterium",
  'sys_deuterium_sh'   => "D",
  'sys_energy'         => "Energy",
  'sys_energy_sh'      => "E",
  'sys_dark_matter'    => "Dark Matter",
  'sys_dark_matter_sh' => "DM",

  'sys_reset'           => "Reset",
  'sys_send'            => "Send",
  'sys_characters'      => "Characters",
  'sys_back'            => "Back",
  'sys_return'          => "Return",
  'sys_delete'          => "Delete",
  'sys_writeMessage'    => "Write a message",
  'sys_hint'            => "Tip",

  'sys_alliance'        => "Alliance",
  'sys_player'          => "Player",
  'sys_coordinates'     => "Coordinates",

  'sys_online'          => "Online",
  'sys_offline'         => "Offline",
  'sys_status'          => "Status",

  'sys_universe'        => "Universe",
  'sys_goto'            => "Go",

  'sys_time'            => "Time",
  'sys_temperature'     => 'Temperature',

  'sys_no_task'         => "No task",

  'sys_affilates'       => "Invited players",

  'sys_fleet_arrived'   => "Fleet arrived",

  'sys_planet_type' => array(
    PT_PLANET => 'Planet', 
    PT_DEBRIS => 'Debris Field', 
    PT_MOON   => 'Moon',
  ),

  'sys_planet_type_sh' => array(
    PT_PLANET => '(P)', 
    PT_DEBRIS => '(D)', 
    PT_MOON   => '(M)',
  ),

  'sys_capacity' 			=> 'Load Capacity',
  'sys_cargo_bays' 			=> 'Holds',

  'sys_supernova' 			=> 'Supernova',
  'sys_server' 			=> 'Server',

  'sys_unbanned'			=> 'Unbanned',

  'sys_date_time'			=> 'Date and time',
  'sys_from_person'	   => 'From',
  'sys_from_speed'	   => 'from',

  'sys_from'		  => 'from',

// Resource page
  'res_planet_production' => 'Planet Production',
  'res_basic_income' => 'Basic Income',
  'res_total' => 'Total',
  'res_calculate' => 'Calculate',
  'res_hourly' => 'Hourly',
  'res_daily' => 'Daily',
  'res_weekly' => 'Weekly',
  'res_monthly' => 'Monthly',
  'res_storage_fill' => 'Storage occupancy',
  'res_hint' => '<ul><li>Production resources <100% means a shortage of energy. Build more power stations or reduce production resources<li>If your production is 0% likely you came from vacation mode and you want to include all plants<li>What would make the extraction for all plants immediately use the drop-down in the resource table. Especially convenient to use it after the vacation mode</ul>',

// Build page
  'bld_destroy' => 'Destroy',
  'bld_create'  => 'Build',

// Imperium page
  'imp_imperator' => "Emperor",
  'imp_overview' => "Empire Overview",
  'imp_fleets' => "Fleets in flight",
  'imp_production' => "Production",
  'imp_name' => "Name",
  'imp_research' => "Research",
  'sys_fields' => "Fields",

// Cookies
  'err_cookie' => "Error! You cannot authenticate the user on information in a cookie.<br />Clear cookies in you browser then <a href='login." . PHP_EX . "'>log in</a> in a game or <a href='reg." . PHP_EX . "'>register new account again</a>.",

// Supported languages
  'ru'              	  => 'Russian',
  'en'              	  => 'English',

  'sys_vacation'        => 'Your are on vacation until',
  'sys_vacation_leave'  => 'I have got rest - break holiday!',
  'sys_level'           => 'Level',
  'sys_level_short'     => 'Lvl',

  'sys_yes'             => 'Yes',
  'sys_no'              => 'No',

  'sys_on'              => 'Enable',
  'sys_off'             => 'Disable',

  'sys_confirm'         => 'Confirm',
  'sys_save'            => 'Save',
  'sys_create'          => 'Create',
  'sys_write_message'   => 'Write a message',

// top bar
  'top_of_year' => 'Year',
  'top_online'			=> 'Players online',
  
  'sys_first_round_crash_1'	=> 'Contact with the affected fleet lost.',
  'sys_first_round_crash_2'	=> 'This means that it was destroyed in the first round of the battle.',

  'sys_ques' => array(
    QUE_STRUCTURES => 'Building',
    QUE_HANGAR     => 'Shipyard',
    QUE_RESEARCH   => 'Research',
  ),

  'eco_que'       => 'Queue',
  'eco_que_empty' => 'Queue is empty',
  'eco_que_clear' => 'Clear queue',
  'eco_que_trim'  => 'Undo last queue',

  'sys_overview'			=> 'Overview',
  'mod_marchand'			=> 'Trader',
  'sys_galaxy'			=> 'Galaxy',
  'sys_system'			=> 'System',
  'sys_planet'			=> 'Planet',
  'sys_planet_title'			=> 'Planet Type',
  'sys_planet_title_short'			=> 'Type',
  'sys_moon'			=> 'Moon',
  'sys_error'			=> 'Error',
  'sys_done'				=> 'Finish',
  'sys_no_vars'			=> 'Initialization of variables, see the Administration!',
  'sys_attacker_lostunits'		=> 'Attacker lost %s units.',
  'sys_defender_lostunits'		=> 'Defender lost %s units.',
  'sys_gcdrunits' 			=> 'Now at these coordinates are %s %s and %s %s.',
  'sys_moonproba' 			=> 'Chance of Moon is: %d %% ',
  'sys_moonbuilt' 			=> 'Thanks to the huge energy huge chunks of metal and Crystal are joined together and formed new moon %s %s!',
  'sys_attack_title'    		=> '%s. Battle occurred between the following fleets::',
  'sys_attack_attacker_pos'      	=> 'Attacker %s [%s:%s:%s]',
  'sys_attack_techologies' 	=> 'Weapons: %d %% Shields: %d %% Armor: %d %% ',
  'sys_attack_defender_pos' 	=> 'Defender %s [%s:%s:%s]',
  'sys_ship_type' 			=> 'Type',
  'sys_ship_count' 		=> 'Count',
  'sys_ship_weapon' 		=> 'Weapon',
  'sys_ship_shield' 		=> 'Shield',
  'sys_ship_armour' 		=> 'Armor',
  'sys_destroyed' 			=> 'destroyed',
  'sys_attack_attack_wave' 	=> 'The Attacker is doing shots with a total capacity of %s on the defender. Shields absorb %s of the shots.',
  'sys_attack_defend_wave'		=> 'The Defender is doing shots with a total capacity of %s on the attacker. Shields absorb %s of the shots.',
  'sys_attacker_won' 		=> 'The Attacker won the battle!',
  'sys_defender_won' 		=> 'The Defender won the battle!',
  'sys_both_won' 			=> 'The battle ended in a draw!',
  'sys_stealed_ressources' 	=> 'The Attacker gets %s Metal %s %s Crystal %s and %s Deuterium.',
  'sys_rapport_build_time' 	=> 'Report generation time %s seconds',
  'sys_mess_tower' 		=> 'Transport',
  'sys_coe_lost_contact' 		=> 'You lost contact with your fleet',
  'sys_spy_maretials' 		=> 'Raw material',
  'sys_spy_fleet' 			=> 'Fleet',
  'sys_spy_defenses' 		=> 'Defence',
  'sys_mess_qg' 			=> 'Fleet command',
  'sys_mess_spy_report' 		=> 'Spy Report',
  'sys_mess_spy_lostproba' 	=> 'Accuracy of information received by the Spy probe %d %% ',
  'sys_mess_spy_detect_chance' 	=> 'Detection chance %d%%',
  'sys_mess_spy_control' 		=> 'Counter-intelligence',
  'sys_mess_spy_activity' 		=> 'Spy activity',
  'sys_mess_spy_ennemyfleet' 	=> 'Alien fleet with planet',
  'sys_mess_spy_seen_at'		=> 'was discovered near the planet',
  'sys_mess_spy_destroyed'		=> 'Spy fleet was destroyed',
  'sys_mess_spy_destroyed_enemy'		=> 'Enemy spy fleet was destroyed',
  'sys_object_arrival'		=> 'Arrived on the planet',
  'sys_stay_mess_stay' => 'Leave Fleet',
  'sys_stay_mess_start' 		=> 'Your fleet arrived at the planet',
  'sys_stay_mess_back'		=> 'Your fleet is back ',
  'sys_stay_mess_end'		=> ' and delivered:',
  'sys_stay_mess_bend'		=> ' and delivered the following resources:',
  'sys_adress_planet' 		=> '[%s:%s:%s]',
  'sys_stay_mess_goods' 		=> '%s : %s, %s : %s, %s : %s',
  'sys_colo_mess_from' 		=> 'Colonization',
  'sys_colo_mess_report' 		=> 'Report about colonization',
  'sys_colo_defaultname' 		=> 'Colony',
  'sys_colo_arrival' 		=> 'The fleet reaches the coordinates ',
  'sys_colo_maxcolo' 		=> ', but you cannot colonize the planet has reached the maximum number of colonies for your level of colonization',
  'sys_colo_allisok' 		=> ', and colonists are beginning to a new planet.',
  'sys_colo_badpos'  			=> ', and the colonists found little benefit for the environment of your Empire. The mission colonization back to planet submit.',
  'sys_colo_notfree' 			=> ', the colonists did not find the planet in these coordinates. They have to pave the way back completely discouraged.',
  'sys_colo_no_colonizer'     => 'In the fleet not colonizer',
  'sys_colo_planet'  		=> ' Planet colonized by!',
  'sys_expe_report' 		=> 'Expedition Report',
  'sys_recy_report' 		=> 'Recycler information',
  'sys_expe_blackholl_1' 		=> 'Your fleet hit the black hole and you lost part of your fleet!',
  'sys_expe_blackholl_2' 		=> 'Your fleet hit the black hole and your fleet was completely sucked in!',
  'sys_expe_nothing_1' 		=> 'Your researchers witnessed a Supernova! And your drives are able to take part of the absorption of energy.',
  'sys_expe_nothing_2' 		=> 'Your researchers found nothing!',
  'sys_expe_found_goods' 		=> 'Your researchers found a planet rich in raw materials!<br>You got %s %s, %s %s and %s %s',
  'sys_expe_found_ships' 		=> 'Your researchers found flawlessly new fleet!<br>You got: ',
  'sys_expe_back_home' 		=> 'Your fleet is back.',
  'sys_mess_transport' 		=> 'Transport',
  'sys_tran_mess_owner' 		=> 'One of your fleet reaches the planet %s %s and delivers %s %s, %s  %s and %s %s.',
  'sys_tran_mess_user'  		=> 'Your fleet sent to the planet %s %s arrived at %s %s and delivered %s %s, %s  %s and %s %s.',
  'sys_mess_fleetback' 		=> 'Return',
  'sys_tran_mess_back' 		=> 'One of your fleet returned to planet %s %s.',
  'sys_recy_gotten' 		=> 'One of your fleets, Nancy a %s %s and %s %s Return to planet.',
  'sys_notenough_money' 		=> 'You do not have enough resources to build: %s. You now: %s %s , %s %s and %s %s. For construction: %s %s , %s %s and %s %s.',
  'sys_nomore_level'		=> 'You no longer can improve it. It reached Max. level ( %s ).',
  'sys_buildlist' 			=> 'Building list',
  'sys_buildlist_fail' 		=> 'no buildings',
  'sys_gain' 			=> 'Extraction: ',
  'sys_debris' 			=> 'Debris: ',
  'sys_noaccess' 			=> 'Access Denied',
  'sys_noalloaw' 			=> 'You have access to this zone!',
  'sys_governor'        => 'Governor',

  // News page & a bit of imperator page
  'news_title'      => 'News',
  'news_none'       => 'No news',
  'news_new'        => 'New',
  'news_future'     => 'Announcement',
  'news_more'       => 'Read More...',
  'news_hint'       => 'To close fresh news list - read them all by clicking on header "[ News ]"',

  'news_date'       => 'Date',
  'news_announce'   => 'Table of Contents',
  'news_detail_url' => 'Link to more info',
  'news_mass_mail'  => 'Send news to all players',

  'news_total'      => 'Total news: ',

  'news_add'        => 'Submit news',
  'news_edit'       => 'Edit news',
  'news_copy'       => 'Copy the news',
  'news_mode_new'   => 'New',
  'news_mode_edit'  => 'Editing',
  'news_mode_copy'  => 'Copying',

  'sys_administration' => 'Server Administration',

  // Shortcuts
  'shortcut_title'     => 'Shortcuts',
  'shortcut_none'      => 'No shortcuts',
  'shortcut_new'       => 'NEW',
  'shortcut_text'      => 'Text',

  'shortcut_add'       => 'Add shortcut',
  'shortcut_edit'      => 'Edit shortcut',
  'shortcut_copy'      => 'Copy shortcut',
  'shortcut_mode_new'  => 'New',
  'shortcut_mode_edit' => 'Editing',
  'shortcut_mode_copy' => 'Copying',

  // Missile-related
  'mip_h_launched'			=> 'Launch of interplanetary missiles',
  'mip_launched'				=> 'Launching interplanetary missiles: <b>%s</b>!',

  'mip_no_silo'				=> 'Insufficient level of silos on the planet <b>%s</b>.',
  'mip_no_impulse'			=> 'You want to investigate pulse motor.',
  'mip_too_far'				=> 'Rocket cannot fly that far.',
  'mip_planet_error'			=> 'Error - more than one planet one coordinate',
  'mip_no_rocket'				=> 'Not enough missiles in the shaft to carry out the attack.',
  'mip_hack_attempt'			=> ' You an hacker? Another joke and you will be banned. IP address and login Is recorded.',

  'mip_all_destroyed' 		=> 'All interplanetary missiles were destroyed missile intercepted<br>',
  'mip_destroyed'				=> '%s interplanetary missiles were destroyed by intercept missiles.<br>',
  'mip_defense_destroyed'	=> 'Destroyed following defences:<br />',
  'mip_recycled'				=> 'Repaired from the debris of defence equipment: ',
  'mip_no_defense'			=> 'On an affected planet protection!',

  'mip_sender_amd'			=> 'Rocket and space forces',
  'mip_subject_amd'			=> 'Missile attack',
  'mip_body_attack'			=> 'Attack of the interplanetary missiles (%1$s PCs.) with the planet %2$s <a href="galaxy.php?mode=3&galaxy=%3$d&system=%4$d&planet=%5$d">[%3$d:%4$d:%5$d]</a> on the planet %6$s <a href="galaxy.php?mode=3&galaxy=%7$d&system=%8$d&planet=%9$d">[%7$d:%8$d:%9$d]</a><br><br>',
  
  // Misc
  'sys_game_rules' => 'Rules of the game',
  'sys_max' => 'Max',
  'sys_banned_msg' => 'You are banned. For more information please visit <a href="banned.php">here</a>. Time of account ban: ',
  'sys_total_time' => 'Total time',

  // Univers
  'uni_moon_of_planet' => 'planet',

  // Combat reports
  'cr_view_title'  => "View Combat Reports",
  'cr_view_button' => "View Report",
  'cr_view_prompt' => "Enter the code",
  'cr_view_my'     => "My Combat Records",
  'cr_view_hint'   => "This page allows you to view shared Combat Reports. All Combat Reports will have a code at the bottom. To share a Combat Report simply give them that code. Then they can enter it here and view your Combat Report.",

  // Fleet
  'flt_gather_all'    => 'Gather resources',
  
  // Ban system
  'ban_title'      => 'Black list',
  'ban_name'       => 'Name',
  'ban_reason'     => 'The reason for the ban',
  'ban_from'       => 'Ban data',
  'ban_to'         => 'Term of Ban',
  'ban_by'         => 'Issued',
  'ban_no'         => 'No Banned players',
  'ban_thereare'   => 'Total',
  'ban_players'    => 'Banned',
  'ban_banned'     => 'Players banned: ',

  // Contacts
  'ctc_title' => 'Administration',
  'ctc_intro' => 'Here you will find the addresses of all administrators and operators of the games for feedback',
  'ctc_name'  => 'Name',
  'ctc_rank'  => 'Rank',
  'ctc_mail'  => 'E-Mail',

  // Records page
  'rec_title'  => 'Universe Records',
  'rec_build'  => 'Building',
  'rec_specb'  => 'Special Building',
  'rec_playe'  => 'Player',
  'rec_defes'  => 'Defence',
  'rec_fleet'  => 'Fleet',
  'rec_techn'  => 'Technology',
  'rec_level'  => 'Level',
  'rec_nbre'   => 'Number',
  'rec_rien'   => '-',

  // Credits page
  'cred_link'    => 'Internet',
  'cred_site'    => 'Site',
  'cred_forum'   => 'Forum',
  'cred_credit'  => 'Authors',
  'cred_creat'   => 'Director',
  'cred_prog'    => 'Programmer',
  'cred_master'  => 'Moderator',
  'cred_design'  => 'DesignerСЂ',
  'cred_web'     => 'Webmaster',
  'cred_thx'     => 'Thanks',
  'cred_based'   => 'Basis for establishing XNova',
  'cred_start'   => 'Place debut XNova',

  // Built-in chat
  'chat_common'  => 'Common chat',
  'chat_ally'    => 'Ally chat',
  'chat_history' => 'History',
  'chat_message' => 'Message',
  'chat_send'    => 'Send',
  'chat_page'    => 'Page',
  'chat_timeout' => 'Chat is disabled from your inactivity. Refresh the page.',

  // ----------------------------------------------------------------------------------------------------------
  // Interface of Jump Gate
  'gate_start_moon' => 'Home Moon',
  'gate_dest_moon'  => 'Destination Moon',
  'gate_use_gate'   => 'Use Gate',
  'gate_ship_sel'   => 'Select ships',
  'gate_ship_dispo' => 'photos',
  'gate_jump_btn'   => 'jump!!',
  'gate_jump_done'  => 'Gates are in the process of reloading!<br>Gates will be ready for use through: ',
  'gate_wait_dest'  => 'points of destination Gate is in preparations! gate will be ready for use: ',
  'gate_no_dest_g'  => 'The ultimate destination did not open the gate to move the fleet',
  'gate_no_src_ga'  => 'There is no gates on current moon',
  'gate_wait_star'  => 'Gates are in the process of reloading!<br>Gates will be ready for use: ',
  'gate_wait_data'  => 'error, no data to make jump!',
  'gate_vacation'   => 'Error, you cannot leap because you are in Vacation Mode!',
  'gate_ready'      => 'Gate ready to jump',

  // quests
  'qst_quests'               => 'Quests',
  'qst_msg_complete_subject' => 'You completed quest!',
  'qst_msg_complete_body'    => 'You completed quest "%s".',
  'qst_msg_your_reward'      => 'Your reward: ',

  // Messages
  'msg_from_admin' => 'Universe Administration',
  'msg_class' => array(
    MSG_TYPE_OUTBOX => 'Sent messages',
    MSG_TYPE_SPY => 'Spy reports',
    MSG_TYPE_PLAYER => 'Message by players',
    MSG_TYPE_ALLIANCE => 'Alliance Communications',
    MSG_TYPE_COMBAT => 'Military reports',
    MSG_TYPE_RECYCLE => 'Records processing',
    MSG_TYPE_TRANSPORT => 'The arrival of the fleet',
    MSG_TYPE_ADMIN => 'Administrative messages',
    MSG_TYPE_EXPLORE => 'Reports for expeditions',
    MSG_TYPE_QUE => 'Message queue structures',
    MSG_TYPE_NEW => 'All messages',
  ),

  'msg_que_research_from'    => 'Scientists',
  'msg_que_research_subject' => 'Scientific discovery',
  'msg_que_research_message' => 'New technology "%s" level %d was discovered',

  'msg_que_planet_from'    => 'Governor',

  'msg_que_hangar_subject' => 'Building on hangar complete',
  'msg_que_hangar_message' => "Hangar on %s complete his work",

  'msg_que_built_subject'   => 'Planetary build work complete',
  'msg_que_built_message'   => "Building of '%2\$s' on %1\$s complete. Levels built: %3\$d",
  'msg_que_destroy_message' => "Demolition of '%2\$s' on %1\$s complete. Levels demolished: %3\$d",

  'msg_personal_messages' => 'Personal Messages',

  'sys_opt_bash_info'    => 'Antibashing settings',
  'sys_opt_bash_attacks' => 'Attacks per wave',
  'sys_opt_bash_interval' => 'Interval between waves',
  'sys_opt_bash_scope' => 'Bashing calculate period',
  'sys_opt_bash_war_delay' => 'Moratory after declaring war',
  'sys_opt_bash_waves' => 'Waves per period',
  'sys_opt_bash_disabled'    => 'Antibashing system disabled',

  'sys_id' => 'ID',
  'sys_identifier' => 'Identifier',

  'sys_email'   => 'E-Mail',
  'sys_ip' => 'IP',

  'sys_max' => 'Max',
  'sys_maximum' => 'Maximum',
  'sys_maximum_level' => 'Max level',

  'sys_user_name' => 'User name',
  'sys_player_name' => 'Player name',
  'sys_user_name_short' => 'Name',

  'sys_planets' => 'Planets',
  'sys_moons' => 'Moons',

  'sys_no_governor' => 'Hire governor',

  'sys_quantity' => 'Quantity',
  'sys_quantity_maximum' => 'Maximum quantity',
  'sys_qty' => 'Qty',

  'sys_buy_for' => 'Buy for',
  'sys_buy' => 'Buy',

  'sys_eco_lack_dark_matter' => 'Not enough Dark Matter',

  'sys_result' => array(
    'error_dark_matter_not_enough' => 'Не хватает Тёмной Материи для завершения операции',
    'error_dark_matter_change' => 'Ошибка изменения количества Тёмной Материи! Повторите операцию еще раз. Если ошибка повторится - сообщите Администрации сервера',
  ),

  // Arrays
  'sys_build_result' => array(
    BUILD_ALLOWED => 'Can be built',
    BUILD_REQUIRE_NOT_MEET => 'Requirements not met',
    BUILD_AMOUNT_WRONG => 'Too much',
    BUILD_QUE_WRONG => 'Queue not exists',
    BUILD_QUE_UNIT_WRONG => 'Wrong queue',
    BUILD_INDESTRUCTABLE => 'Can not be destroyed',
    BUILD_NO_RESOURCES => 'Not enough resources',
    BUILD_NO_UNITS => 'No units',
  ),

  'sys_game_mode' => array(
    GAME_SUPERNOVA => 'SuperNova',
    GAME_OGAME     => 'oGame',
  ),

  'months' => array(
    '01'=>'January',
    '02'=>'February',
    '03'=>'March',
    '04'=>'April',
    '05'=>'May',
    '06'=>'June',
    '07'=>'July',
    '08'=>'August',
    '09'=>'September',
    '10'=>'October',
    '11'=>'November',
    '12'=>'December'
  ),

  'weekdays' => array(
    0 => 'Sunday',
    1 => 'Monday',
    2 => 'Tuesday',
    3 => 'Wednesday',
    4 => 'Thursday',
    5 => 'Friday',
    6 => 'Saturday'
  ),

  'user_level' => array(
    0 => 'Player',
    1 => 'Moderator',
    2 => 'Operator',
    3 => 'Administrator',
  ),

  'user_level_shortcut' => array(
    0 => 'P',
    1 => 'M',
    2 => 'O',
    3 => 'A',
  ),

  'sys_lessThen15min'   => '&lt; 15 min',

  'sys_no_points'        => 'You do not have enough Dark Matter!',
  'sys_dark_matter_desc' => 'Dark matter - using the standard methods of  fabric, which accounts for 23% mass of the universe. From there you can obtain an incredible amount of energy. Because of this, and because of the complexities associated with its extraction, Dark Matter is valued very highly.',
  'sys_dark_matter_hint' => 'With the help of this substance you can hire officers and commanders.',

  'sys_msg_err_update_dm' => 'Error updating DM quantity!',

  'sys_na' => 'Not available',
  'sys_na_short' => 'N/A',

  'sys_ali_res_title' => 'Alliance\'s resources',

  'sys_bonus' => 'Bonus',

  'sys_of_ally' => 'of Alliance',

  'sys_hint_player_name' => 'You can search player by his ID or name. If player name consists from strange symbols or only from numbers - you should use player ID for search.',
  'sys_hint_ally_name' => 'You can search Alliance by his ID, tag or name. If Alliance\'s tag or name consists from strange symbols or only from numbers - you should use ally ID for search.',

  'sys_fleet_and' => '+ fleets',
  'sys_on_planet' => 'On planet',
  'fl_on_stores' => 'In stock',

  'sys_ali_bonus_members' => 'Minimum Alliance size for Ally bonus ',

  'sys_premium' => 'Premium account',

  'mrc_period_list' => array(
    PERIOD_MINUTE    => '1 minute',
    PERIOD_MINUTE_3  => '3 minutes',
    PERIOD_MINUTE_5  => '5 minutes',
    PERIOD_MINUTE_10 => '10 minutes',
    PERIOD_DAY       => '1 day',
    PERIOD_DAY_3     => '3 days',
    PERIOD_WEEK      => '1 week',
    PERIOD_WEEK_2    => '2 weeks',
    PERIOD_MONTH     => '30 days',
    PERIOD_MONTH_2   => '60 days',
    PERIOD_MONTH_3   => '90 days',
  ),

  'sys_sector_buy' => 'Buy 1 sector',

  'sys_select_confirm' => 'Confirm selection',

  'sys_capital' => 'Capital',

  'sys_result_operation' => 'Outcome',

  'sys_password' => 'Password',
  'sys_password_length' => 'Password length',
  'sys_password_seed' => 'Used characters',

  'sys_msg_ube_report_err_not_found' => 'Battle report not found - check cypher key. It is possible that battle report was deleted as outdated',

  'sys_mess_attack_report' 	=> 'Battle Report',
  'sys_perte_attaquant' 		=> 'The Attacker lost',
  'sys_perte_defenseur' 		=> 'The Defender lost',


  'ube_report_info_main' => 'Основная информация о бое',
  'ube_report_info_date' => 'Дата и время',
  'ube_report_info_location' => 'Место',
  'ube_report_info_rounds_number' => 'Количество раундов',
  'ube_report_info_outcome' => 'Результат боя',
  'ube_report_info_outcome_win' => 'Атакующий выиграл бой',
  'ube_report_info_outcome_loss' => 'Атакующий проиграл бой',
  'ube_report_info_outcome_draw' => 'Бой закончился ничьей',
  'ube_report_info_link' => 'Ссылка на боевой отчет',
  'ube_report_info_sfr' => 'Бой закончился за один раунд проигрышем атакующего<br />Вероятна РМФ',
  'ube_report_info_debris' => 'Обломки на орбите',
  'ube_report_info_loot' => 'Добыча',
  'ube_report_info_loss' => 'Боевые потери',
  'ube_report_info_generate' => 'Время генерации страницы',

  'ube_report_moon_was' => 'У этой планеты уже была луна',
  'ube_report_moon_chance' => 'Шанс образования луны',
  'ube_report_moon_created' => 'На орбите планеты образовалась луна диаметром',

  'ube_report_moon_reapers_none' => 'Все корабли с гравитационными двигателями были уничтожены в процессе боя',
  'ube_report_moon_reapers_wave' => 'Корабли атакующего создали сфокусированную гравитационную волну',
  'ube_report_moon_reapers_chance' => 'Шанс уничтожения луны',
  'ube_report_moon_reapers_success' => 'Луна уничтожена',
  'ube_report_moon_reapers_failure' => 'Мощности волны не хватило для уничтожения луны',

  'ube_report_moon_reapers_outcome' => 'Шанс взрыва двигателей',
  'ube_report_moon_reapers_survive' => 'Точная компенсация гравитационных полей системы позволила погасить отдачу от разрушения луны',
  'ube_report_moon_reapers_died' => 'Не сумев компенсировать добавочные гравитационные поля системы, флот был уничтожен',

  'ube_report_side_attacker' => 'Атакующий',
  'ube_report_side_defender' => 'Защитник',

  'ube_report_round' => 'Раунд',
  'ube_report_unit' => 'Боевая единица',
  'ube_report_attack' => 'Атака',
  'ube_report_shields' => 'Щиты',
  'ube_report_shields_passed' => 'Пробой',
  'ube_report_armor' => 'Броня',
  'ube_report_damage' => 'Урон',
  'ube_report_loss' => 'Потери',

  'ube_report_info_restored' => 'Восстановленно оборонительных сооружений',
  'ube_report_info_loss_final' => 'Итоговые потери боевых единиц',
  'ube_report_info_loss_resources' => 'Потери в пересчете на ресурсы',
  'ube_report_info_loss_dropped' => 'Потери ресурсов из-за уменьшения трюмов',
  'ube_report_info_loot_lost' => 'Увезено ресурсов со складов планеты',
  'ube_report_info_loss_gained' => 'Потери из-за вывоза ресурсов с планеты',
  'ube_report_info_loss_in_metal' => 'Общие потери в пересчете на металл',

  'ube_report_msg_body_common' => 'Бой состоялся %s на орбите %s [%d:%d:%d] %s<br />%s<br /><br />',
  'ube_report_msg_body_debris' => 'В результат боя на орбите планеты образовались обломки:<br />',
  'ube_report_msg_body_sfr' => 'Связь с флотом утеряна',

  'sys_kilometers_short' => 'км',

  'ube_simulation' => 'Симуляция',

  'sys_hire_do' => 'Hire',

  'sys_captains' => 'Captains',

  'sys_fleet_composition' => 'Fleet composition',

));

?>
