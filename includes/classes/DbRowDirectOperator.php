<?php

/**
 * Class DbRowDirectOperator
 *
 * Handle EntityModel storing/loading operations
 */

class DbRowDirectOperator implements \Common\IEntityOperator {

  /**
   * @param EntityContainer $cEntity
   *
   * @return array
   */
  public function getById($cEntity) {
    $stmt = classSupernova::$gc->query
      ->setIdField($cEntity->getIdFieldName())
      ->field('*')
      ->from($cEntity->getTableName())
      ->where($cEntity->getIdFieldName() . ' = "' . $cEntity->dbId . '"');

    return $stmt->selectRow();
  }

  /**
   * @param EntityContainer $cEntity
   *
   * @return int
   */
  public function deleteById($cEntity) {
    $db = $cEntity->getDbStatic();

    $db->doDeleteRow(
      $cEntity->getTableName(),
      array(
        $cEntity->getIdFieldName() => $cEntity->dbId,
      )
    );

    return $db->db_affected_rows();
  }

  /**
   * @param EntityContainer $cEntity
   *
   * @return int|string
   */
  public function insert($cEntity) {
    $db = $cEntity->getDbStatic();

    $row = $cEntity->exportRowNoId();
    if (empty($row)) {
      // TODO Exception
      return 0;
    }
    $db->doInsertSet($cEntity->getTableName(), $row);

    // TODO Exception if db_insert_id() is empty
    return $cEntity->dbId = $db->db_insert_id();
  }

}
