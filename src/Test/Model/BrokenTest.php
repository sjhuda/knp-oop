<?php

namespace ShipBattle\Test;

use ShipBattle\Model\BrokenShip;

class BrokenTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_is_a_broken_ship()
    {
        $ship = new BrokenShip('Broken Ship');

        $type = $ship->getType();

        $this->assertEquals('Broken', $type);
    }

    /** @test */
    public function it_has_no_jedi_factor()
    {
        $ship = new BrokenShip('Broken Ship');

        $this->assertEquals(0, $ship->getJediFactor());
    }

    /** @test */
    public function it_is_not_functional()
    {
        $ship = new BrokenShip('Broken Ship');

        $this->assertFalse($ship->isFunctional());
    }
}
