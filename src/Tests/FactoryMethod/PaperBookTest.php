<?php

namespace Tests\FactoryMethod;

use FactoryMethod\PaperBook;

class PaperBookTest extends \PHPUnit_Framework_TestCase
{
    /** @var  PaperBook $paperBook */
    private $paperBook;

    public function setUp()
    {
        $this->paperBook = new PaperBook();
    }

    public function testSetHall()
    {
        $hall = "01";
        $this->paperBook->setHall($hall);

        $this->assertEquals($hall, $this->paperBook->getHall(), "Set hall failed");
    }

    public function testSetShelf()
    {
        $shelf = "20";
        $this->paperBook->setShelf($shelf);

        $this->assertEquals($shelf, $this->paperBook->getShelf(), "Set shelf failed");
    }

    public function testStringRepresentation()
    {
        //$this->assertEquals() $this->paperBook.PHP_EOL;
    }
}
