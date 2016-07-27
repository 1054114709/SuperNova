<?php

class DbRowSimple {

  /**
   * @param Entity $object
   * @param mixed  $rowId
   *
   * @return Entity
   */
  public function getById($object, $rowId) {
    $stmt = classSupernova::$gc->query
      ->setIdField($object->getIdFieldName())
      ->field('*')
      ->from($object->getTableName())
      ->where($object->getIdFieldName() . ' = "' . $rowId . '"');

    $object->importDbRow($stmt->selectRow());

    return $object;
  }

  /**
   * @param Entity $object
   */
  public function deleteById($object) {
    $db = classSupernova::$gc->db;

    $db->doquery("DELETE FROM `{{" . $object->getTableName() . "}}` WHERE `{$object->getIdFieldName()}` = '{$object->dbId}' LIMIT 1;");

    return $db->db_affected_rows();
  }

  /**
   * @param Entity $object
   */
  public function insert($object) {
    $db = classSupernova::$gc->db;

    $query = array();
    foreach ($object->exportDbRow(false) as $fieldName => $fieldValue) {
      // TODO: MORE type detection
      if(!is_numeric($fieldValue)) {
        $fieldValue = "'" . $db->db_escape($fieldValue) . "'";
      }
      $query[] = "`{$fieldName}` = {$fieldValue}";
    }

    $query = implode(',', $query);
    if (empty($query)) {
      // TODO Exceptiion
      return 0;
    }

    $db->doquery("INSERT INTO `{{" . $object->getTableName() . "}}` SET " . $query);

    // TODO Exceptiion if db_insert_id() is empty
    return $object->dbId = $db->db_insert_id();
  }

}
