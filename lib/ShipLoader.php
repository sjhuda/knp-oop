<?php

class ShipLoader
{
  public function getShips()
  {
    $shipsData = $this->queryForShips();
    $ships = array();
    foreach ($shipsData as $shipData)
    {
      $ship = new Ship($shipData['name']);
      $ship->setWeaponPower($shipData['weapon_power']);
      $ship->setJediFactor($shipData['jedi_factor']);
      $ship->setStrength($shipData['strength']);

      $ships[] = $ship;
    }
    return $ships;
  }

  private function queryForShips()
  {
    $pdo = new PDO('mysql:host=localhost;dbname=oo_battle', 'root', 'root');
    $statement = $pdo->prepare('SELECT * FROM ship');
    $statement->execute();
    $shipsArray = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $shipsArray;
  }
}