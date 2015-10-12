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
    $val = parent::getNameAndSpecs($useShortFormat);
    $val .=  ' (Rebel)';

    return $val;
  }
}