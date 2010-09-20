<?php
/*
 * common.php
 *
 * Common init file
 *
 * @version 1.1 Security checks by Gorlum for http://supernova.ws
 */
require_once('includes/init.inc');

if (!$InLogin) {
  $user          = CheckTheUser();

  if($config->game_disable)
  {
    if ($user['authlevel'] < 1)
    {
      message ( sys_bbcodeParse($config->game_disable_reason), $config->game_name );
      die();
    }
    else
    {
      print( "<div align=center style='font-size: 24; font-weight: bold; color:red;'>" . sys_bbcodeParse($config->game_disable_reason) . '</div><br>' );
    }
  }
}

if ( $user['authlevel'] >= 3 )
{
  $update_file = "{$_SERVER['DOCUMENT_ROOT']}/includes/update.{$phpEx}";
  $flag_file   = "{$_SERVER['DOCUMENT_ROOT']}/includes/update.last";

  if(file_exists($update_file))
  {
    if(filemtime($update_file) != filemtime($flag_file))
    {
      require_once($update_file);

      if(!file_exists($flag_file))
      {
        fclose(fopen($flag_file, 'w'));
      }

      touch($flag_file, filemtime($update_file));
    }
  }
}

if ( isset ($user) )
{
  FlyingFleetHandler();

  if ( defined('IN_ADMIN') )
  {
    $UserSkin  = $user['dpath'];
    $local     = stristr ( $UserSkin, "http:");
    if ($local === false)
    {
      if (!$user['dpath'])
      {
        $dpath     = "../". DEFAULT_SKINPATH  ;
      }
      else
      {
        $dpath     = "../". $user["dpath"];
      }
    }
    else
    {
      $dpath     = $UserSkin;
    }
  }
  else
  {
    $dpath     = (!$user["dpath"]) ? DEFAULT_SKINPATH : $user["dpath"];
  }

  SetSelectedPlanet ( $user );

  $planetrow = doquery("SELECT * FROM {{table}} WHERE `id` = '".$user['current_planet']."';", 'planets', true);

  CheckPlanetUsedFields($planetrow);
}
else
{
  // Bah si d�ja y a quelqu'un qui passe par l� et qu'a rien a faire de press� ...
  // On se sert de lui pour mettre a jour tout les retardataires !!
}
?>
