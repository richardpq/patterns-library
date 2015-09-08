<?php

namespace Tests\AbstractFactory;

use AbstractFactory\PaperTourismBook;

class PaperTourismBookTest extends \PHPUnit_Framework_TestCase
{
    public function testGetMaps()
    {
        $tourismBook = new PaperTourismBook();
        $maps = $tourismBook->getMaps();

        $this->assertEquals(
            'Maps for Paper Tourism Book',
            $maps
        );
    }
}
