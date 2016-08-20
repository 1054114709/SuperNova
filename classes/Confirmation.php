<?php

/**
 * Created by Gorlum 17.09.2015 14:11
 */
class Confirmation {

  /**
   * @var db_mysql
   */
  protected $db = null;

  public function __construct($db) {
    $this->db = $db;
  }

  // TODO - НЕ ОБЯЗАТЕЛЬНО ОТПРАВЛЯТЬ ЧЕРЕЗ ЕМЕЙЛ! ЕСЛИ ЭТО ФЕЙСБУЧЕК ИЛИ ВКШЕЧКА - МОЖНО ЧЕРЕЗ ЛС ПИСАТЬ!!
  // TODO - OK 4.6
  public function db_confirmation_get_latest_by_type_and_email($confirmation_type_safe, $email_unsafe) {
    $email_safe = $this->db->db_escape($email_unsafe);

    return $this->db->doSelectFetch(
      "SELECT * FROM {{confirmations}} WHERE
          `type` = {$confirmation_type_safe} AND `email` = '{$email_safe}' ORDER BY create_time DESC LIMIT 1;"
    );
  }
  // TODO - OK 4.6
  public function db_confirmation_delete_by_type_and_email($confirmation_type_safe, $email_unsafe) {
    return $this->db->doDeleteWhere(TABLE_CONFIRMATIONS, array('type' => $confirmation_type_safe, 'email' => $email_unsafe));
  }
  // TODO - OK 4.6
  public function db_confirmation_get_unique_code_by_type_and_email($confirmation_type_safe, $email_unsafe) {
    do {
      // Ну, если у нас > 999.999 подтверждений - тут нас ждут проблемы...
      $confirm_code_safe = $this->db->db_escape($confirm_code_unsafe = $this->make_password_reset_code());
      $query = $this->db->doSelectFetch("SELECT `id` FROM {{confirmations}} WHERE `code` = '{$confirm_code_safe}' FOR UPDATE");
    } while($query);

    $this->db->doReplaceSet(TABLE_CONFIRMATIONS, array(
      'type'  => $confirmation_type_safe,
      'code'  => $confirm_code_unsafe,
      'email' => $email_unsafe,
    ));

    return $confirm_code_unsafe;
  }
  // TODO - OK 4.6
  public function db_confirmation_get_by_type_and_code($confirmation_type_safe, $confirmation_code_unsafe) {
    $confirmation_code_safe = $this->db->db_escape($confirmation_code_unsafe);

    return $this->db->doSelectFetch(
      "SELECT * 
      FROM {{confirmations}} 
      WHERE
        `type` = {$confirmation_type_safe} 
        AND 
        `code` = '{$confirmation_code_safe}' 
      ORDER BY create_time 
      DESC LIMIT 1 
      FOR UPDATE"
    );
  }

  protected function make_password_reset_code() {
    return sys_random_string(LOGIN_PASSWORD_RESET_CONFIRMATION_LENGTH, SN_SYS_SEC_CHARS_CONFIRMATION);
  }

}