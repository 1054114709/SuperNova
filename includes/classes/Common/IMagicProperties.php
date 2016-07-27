<?php

namespace Common;

/**
 * Interface IMagicProperties
 *
 * Implements all magic methods for accessing non-exists property
 * Used to distinguish how class properties should be accessed like ArrayAccess
 *
 * @package Common
 */
interface IMagicProperties {
  /**
   * Magic setter
   *
   * @param string $name
   * @param mixed  $value
   */
  public function __set($name, $value);

  /**
   * Magic getter
   *
   * @param string $name
   */
  public function __get($name);

  /**
   * Magic checker for property set
   *
   * @param string $name
   */
  public function __isset($name);

  /**
   * Magic unsetter
   *
   * @param string $name
   */
  public function __unset($name);

}
