<?php

class Ship
{
  public $name;
  public $weaponPower = 0;
  public $jediFactor = 0;
  public $strength = 0;

  public function sayHello()
  {
    echo 'hello';
  }

  public function getName()
  {
    return $this->name;
  }

  public function getNameAndSpecs($useShortFormat = false)
  {
    if ($useShortFormat) {
      return sprintf(
        '%s: w:%s, j:%s, s:%s',
        $this->name,
        $this->weaponPower,
        $this->jediFactor,
        $this->strength
      );
    } else {
      return sprintf(
        '%s: Weapon Power: %s, Jedi Factor: %s, Strength: %s',
        $this->name,
        $this->weaponPower,
        $this->jediFactor,
        $this->strength
      );
    }
  }

  public function  doesGivenShipHaveMoreStrength($givenShip)
  {
    // to do...
    return $givenShip->strength > $this->strength;
  }
}