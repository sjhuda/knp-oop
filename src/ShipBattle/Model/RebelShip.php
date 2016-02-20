<?php

namespace ShipBattle\Model;

class RebelShip extends AbstractShip
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

  public function getJediFactor()
  {
    return rand(10, 30);
  }
}