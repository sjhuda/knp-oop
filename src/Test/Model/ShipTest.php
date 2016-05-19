<?php

namespace ShipBattle\Test;

use ShipBattle\Model\Ship;

class ShipTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_is_an_empire_ship()
    {
        $ship = new Ship('Ship');

        $type = $ship->getType();

        $this->assertEquals('Empire', $type);
    }
}
