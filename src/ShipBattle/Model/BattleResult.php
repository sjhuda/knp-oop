<?php

namespace ShipBattle\Model;

class BattleResult
{
  private $usedJediPowers;
  private $winningShip;
  private $losingShip;

  public function __construct($usedJediPowers, AbstractShip $winningShip = null, AbstractShip $losingShip = null)
  {
    $this->usedJediPowers = $usedJediPowers;
    $this->winningShip = $winningShip;
    $this->losingShip = $losingShip;
  }

  /**
   * @return boolean
   */
  public function wereJediPowersUsed()
  {
    return $this->usedJediPowers;
  }

  /**
   * @return Ship|null
   */
  public function getLosingShip()
  {
    return $this->losingShip;
  }

  /**
   * @return Ship|null
   */
  public function getWinningShip()
  {
    return $this->winningShip;
  }

  public function isThereAWinner()
  {
    return $this->getWinningShip() !== null;
  }
}