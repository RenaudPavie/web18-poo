<?php

class Character
{
  public $arms = 2;
  public $level;
  public $health;
  public $strength;
  public $maxSpeed;

  public function __construct($a ,$b ,$c ,$d )
  {
    $this->level = $a;
    $this->health = $b;
    $this->strength = $c;
    $this->maxSpeed = $d;
  }

  public function getHealth()
  {
    return $this->health;
  }

  public function __destruct()
  {
    echo ' BOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOM ';
  }
}
