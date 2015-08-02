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

  public function getNameAndSpecs($useShortFormat)
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
}

$myShip = new Ship();
$myShip->name = 'Jedi Starship';
$myShip->weaponPower = 10;

echo 'Ship name: ' . $myShip->name;
echo '<hr />';
$myShip->sayHello();
echo '<hr />';
echo $myShip->getName();
echo '<hr />';
echo $myShip->getNameAndSpecs(false);
echo '<hr />';
echo $myShip->getNameAndSpecs(true);