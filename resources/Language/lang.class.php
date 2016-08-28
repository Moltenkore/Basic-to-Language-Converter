<?php

namespace Language;


class lang {
  private $langs;

  function __construct() {
    $this->langs = array();
  }

  public function add(language $lang) {
    $this->langs[$lang->getKey()] = $lang;
  }

  public function remove($key) {
    if (isset($this->langs[$key])) {
      unset($this->langs[$key]);
    }
  }

  public function get($key) {
    if (isset($this->langs[$key])) {
      return $this->langs[$key];
    }
  }

  public function getByName($name) {
    foreach ($this->langs as $lang) {
      if ($lang->getName() == $name) {
        return $lang;
      }
    }
  }

  public function exists($key) {
    return in_array($key, $this->getKeys());
  }

  public function getKeys() {
    return array_keys($this->langs);
  }
}