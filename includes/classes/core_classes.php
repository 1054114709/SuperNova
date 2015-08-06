<?php

/**
 * Class ArrayAccessMultidimensional
 *
 * ����� �������� �������� � ������������ ��������� ��� ArrayAccess
 * ����������� ������� ����� ������������ � $offset � ���� �������
 * ��������: array('test', 1, 2, 3) ����� ��������������� ��������� test[1][2][3]
 *
 * ����� ������� ������ � ������������ ��������� ����� ���� ������������� �� ����� ������, ������� ����� � ���� ����-�������� � ������������ ����������� magic methods __isset, __get, __set � __unset
 *
 * ���� ������-������� ������������ ���������� ������ - ��� ����� ����������� ��� �� ������� __flush()
 *
 */
abstract class ArrayAccessMultidimensional implements ArrayAccess {

  abstract public function __get($offset);
  abstract public function __set($offset, $value = null);
  abstract public function __isset($offset);
  abstract public function __unset($offset);
  public function __flush() {
    return true;
  }

  /**
   * (PHP 5 &gt;= 5.0.0)<br/>
   * Whether a offset exists
   * @link http://php.net/manual/en/arrayaccess.offsetexists.php
   *
   * @param mixed $offset <p>
   * An offset to check for.
   * </p>
   *
   * @return boolean true on success or false on failure.
   * </p>
   * <p>
   * The return value will be casted to boolean if non-boolean was returned.
   */
  public function offsetExists($offset) {
    !is_array($offset) ? $offset = array($offset) : false;

    $current_leaf = $this->__get(reset($offset));
    while(($leaf_index = next($offset)) !== false) {
      if(!isset($current_leaf) || !is_array($current_leaf) || !isset($current_leaf[$leaf_index])) {
        unset($current_leaf);
        break;
      }
      $current_leaf = $current_leaf[$leaf_index];
    }
    return isset($current_leaf);
  }

  /**
   * (PHP 5 &gt;= 5.0.0)<br/>
   * Offset to retrieve
   * @link http://php.net/manual/en/arrayaccess.offsetget.php
   *
   * @param mixed $offset <p>
   * The offset to retrieve.
   * </p>
   *
   * @return mixed Can return all value types.
   */
  public function offsetGet($offset) {
    $result = null;

    !is_array($offset) ? $offset = array($offset) : false;

    if($this->offsetExists($offset)) {
      $result = $this->__get(reset($offset));
      while(($leaf_index = next($offset)) !== false) {
        $result = $result[$leaf_index];
      }
    }

    return $result;
  }


  /**
   * (PHP 5 &gt;= 5.0.0)<br/>
   * Offset to set
   * @link http://php.net/manual/en/arrayaccess.offsetset.php
   *
   * @param mixed $offset <p>
   * The offset to assign the value to.
   * </p>
   * @param mixed $value <p>
   * The value to set.
   * </p>
   *
   * @return void
   */
  public function offsetSet($offset, $value = null) {
    // ���� ��� �������� ������� - ������ ������ ����������
    if(!isset($offset) || (is_array($offset) && empty($offset))) {
      return;
    }

    // ���� � ������� ������� ������ ���� ������� - ������ ��� ������ ������
    if(is_array($offset) && count($offset) == 1) {
      // ������������� ��� � ������
      $offset = array(reset($offset) => $value);
      unset($value);
      // ������ ����� �������������� ����������� ��� ��� ���� $option, $value
    }

    // ��������� ������������ ������� ����� ������ �������� � $option
    if(is_array($offset) && isset($value)) {
      // TODO - � �� ���������� �� ��� �� �� __isset() ??
//pdump($offset, '$offset');
//pdump($value, '$value');
      // ����������� �������� �������
      $root = $this->__get(reset($offset));
      $current_leaf = &$root;
      while(($leaf_index = next($offset)) !== false) {
        !is_array($current_leaf[$leaf_index]) ? $current_leaf[$leaf_index] = array() : false;
        $current_leaf = &$current_leaf[$leaf_index];
      }
//pdump($current_leaf, '$current_leaf');
//pdump($value, '$value');
      if($current_leaf != $value) {
        $current_leaf = $value;
//pdump(reset($offset), 'reset($offset)');
//pdump($root, '$root');
        // ��������� ������ � �����
        $this->__set(reset($offset), $root);
      }
    } else {
      // �������� ������ �� ������� ���� -> ��������
      !is_array($offset) ? $offset = array($offset => $value) : false;

      foreach($offset as $key => $value) {
        $this->__get($key) !== $value ? $this->__set($key, $value) : false;
      }
    }

    $this->__flush(); // ��������� ��� - ���� ���� ��� ���������
  }

  /**
   * (PHP 5 &gt;= 5.0.0)<br/>
   * Offset to unset
   * @link http://php.net/manual/en/arrayaccess.offsetunset.php
   *
   * @param mixed $offset <p>
   * The offset to unset.
   * </p>
   *
   * @return void
   */
  public function offsetUnset($offset) {
    // TODO: Implement offsetUnset() method.
    // ���� ��� �������� ������� - ������ ������ ����������

    if(!isset($offset) || (is_array($offset) && empty($offset))) {
      return;
    }

    !is_array($offset) ? $offset = array($offset) : false;

    if($this->offsetExists($offset)) {
//pdump($offset);
      // ������������ ������ � �����
      $key_to_delete = end($offset);
//      $key_to_delete = key($offset);
//pdump($key_to_delete, '$key_to_delete');
      $parent_offset = $offset;
      array_pop($parent_offset);
      if(!count($parent_offset)) {
        // � ������� ��� ���� ������� - �� ������� � �����. ������ ������� �������
        $this->__unset($key_to_delete);
      } else {
        // �������� ������������ ������
// pdump($parent_offset, '$parent_offset');
        $parent_element = $this->offsetGet($parent_offset);
// pdump($parent_element, '$parent_element');
        // ������� �� ���� �������
        unset($parent_element[$key_to_delete]);
// pdump($parent_element, '$parent_element');
        // ���������� ���������� ������������ ������ �����
        $this->offsetSet($parent_offset, $parent_element);
      }
    }

    $this->__flush(); // ��������� ��� - ���� ���� ��� ���������
  }
}
