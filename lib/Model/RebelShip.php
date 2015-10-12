<?php

class RebelShip extends Ship
{
  public function getType()
  {
    return "Rebel";
  }

  public function isFunctional()
  {
    return true;
  }

  public function getNameAndSpecs($useShortFormat = false)
  {
    if ($useShortFormat) {
      return sprintf(
        '%s: w:%s, j:%s, s:%s (Rebel)',
        $this->getName(),
        $this->getWeaponPower(),
        $this->getJediFactor(),
        $this->getStrength()
      );
    } else {
      return sprintf(
        '%s: Weapon Power: %s, Jedi Factor: %s, Strength: %s (Rebel)',
        $this->getName(),
        $this->getWeaponPower(),
        $this->getJediFactor(),
        $this->getStrength()
      );
    }
  }
}