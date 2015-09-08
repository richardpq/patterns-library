<?php

namespace Tests\AbstractFactory;

use AbstractFactory\ElectronicTourismBook;

class ElectronicTourismBookTest extends \PHPUnit_Framework_TestCase
{
    public function testGetMaps()
    {
        $tourismBook = new ElectronicTourismBook();
        $maps = $tourismBook->getMaps();

        $this->assertEquals(
            'Maps for Electronic Tourism Book',
            $maps
        );
    }
}
