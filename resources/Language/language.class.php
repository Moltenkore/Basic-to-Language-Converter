<?php

namespace Language;


class language {
  private $key;
  private $name;
  private $description;
  private $syllables;
  private $spaceChance;

  function __construct($key, $name) {
    $this->key = $key;
    $this->name = $name;
    $this->description = "";
    $this->syllables = array();
    $this->spaceChance = 55;
  }

  public function getKey() {
    return $this->key;
  }

  public function getName() {
    return $this->name;
  }

  public function getDescription() {
    return $this->description;
  }

  public function getSyllablesArr() {
    return $this->syllables;
  }

  public function getSpaceChance() {
    return $this->spaceChance;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function setDescription($desc) {
    $this->description = $desc;
  }

  public function setSyllablesArr($arr) {
    $this->syllables = $arr;
  }

  public function setSpaceChance($spacechance) {
    $this->spaceChance = $spacechance;
  }
}