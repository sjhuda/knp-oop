<?php

namespace ShipBattle\Test;

use ShipBattle\Model\RebelShip;

class RebelShipTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_is_a_rebel_ship()
    {
        $ship = new RebelShip('Rebel Ship');

        $type = $ship->getType();

        $this->assertEquals('Rebel', $type);
    }
}
