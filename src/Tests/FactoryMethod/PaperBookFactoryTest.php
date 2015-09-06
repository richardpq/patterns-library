<?php

namespace Tests\FactoryMethod;

use FactoryMethod\PaperBookFactory;

class PaperBookFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testPaperBookFactoryCreateMustReturnPaperBook()
    {
        $factory = new PaperBookFactory();
        $pBook = $factory->createBook();

        $this->assertInstanceOf(
            'FactoryMethod\PaperBook',
            $pBook,
            "PaperBookFactory createBook didn't return an instance of PaperBook"
        );
    }

    public function testPaperBookFactoryIsAnInstanceOfBookFactoryInterface()
    {
        $factory = new PaperBookFactory();

        $this->assertInstanceOf(
            'FactoryMethod\BookFactoryInterface',
            $factory,
            "PaperBookFactory didn't return an instance of BookFactoryInterface"
        );
    }
}
