<?php

namespace Tests\FactoryMethod;

use FactoryMethod\ElectronicBookFactory;

class ElectronicBookFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testElectronicBookFactoryCreateMustReturnElectronicBook()
    {
        $factory = new ElectronicBookFactory();
        $eBook = $factory->createBook();

        $this->assertInstanceOf(
            'FactoryMethod\ElectronicBook',
            $eBook,
            "ElectronicBookFactory createBook didn't return an instance of ElectronicBook"
        );
    }

    public function testElectronicBookFactoryIsAnInstanceOfBookFactoryInterface()
    {
        $factory = new ElectronicBookFactory();

        $this->assertInstanceOf(
            'FactoryMethod\BookFactoryInterface',
            $factory,
            "ElectronicBookFactory didn't return an instance of BookFactoryInterface"
        );
    }
}
