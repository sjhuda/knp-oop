<?php

namespace ShipBattle\Model;

abstract class AbstractShip
{
  private $id;
  private $name;
  private $weaponPower = 0;
  private $strength = 0;

  abstract public function getJediFactor();
  abstract public function getType();
  abstract public function isFunctional();

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function sayHello()
  {
    echo 'hello';
  }

  public function getName()
  {
    return $this->name;
  }

  /**
   * @param mixed $name
   */
  public function setName($name) {
    $this->name = $name;
  }

  /**
   * @return int
   */
  public function getWeaponPower() {
    return $this->weaponPower;
  }

  /**
   * @param int $weaponPower
   */
  public function setWeaponPower($weaponPower) {
    $this->weaponPower = $weaponPower;
  }

  public function getNameAndSpecs($useShortFormat = false)
  {
    if ($useShortFormat) {
      return sprintf(
        '%s: w:%s, j:%s, s:%s',
        $this->name,
        $this->weaponPower,
        $this->getJediFactor(),
        $this->strength
      );
    } else {
      return sprintf(
        '%s: Weapon Power: %s, Jedi Factor: %s, Strength: %s',
        $this->name,
        $this->weaponPower,
        $this->getJediFactor(),
        $this->strength
      );
    }
  }

  public function doesGivenShipHaveMoreStrength($givenShip)
  {
    // to do...
    return $givenShip->strength > $this->strength;
  }

  public function getStrength()
  {
    return $this->strength;
  }

  public function setStrength($strength)
  {
    if (!is_numeric($strength)) {
      throw new Exception('Invalid strength passed ' .$strength);
    }
    $this->strength = $strength;
  }

  /**
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * @param integer $id
   */
  public function setId($id) {
    $this->id = $id;
  }
}