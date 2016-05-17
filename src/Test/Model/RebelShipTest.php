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

    /** @test */
    public function it_is_always_functional()
    {
        $ship = new RebelShip('Rebel Ship');
        $this->assertTrue($ship->isFunctional());
    }

    /** @test */
    public function it_has_a_jedi_factor_of_more_than_10()
    {
        $ship = new RebelShip('Rebel Ship');
        $jediFactor = $ship->getJediFactor();

        $this->assertGreaterThanOrEqual(10, $jediFactor);
    }

    /** @test */
    public function it_has_a_jedi_factor_of_less_than_30()
    {
        $ship = new RebelShip('Rebel Ship');
        $jediFactor = $ship->getJediFactor();

        $this->assertLessThanOrEqual(30, $jediFactor);
    }
}
