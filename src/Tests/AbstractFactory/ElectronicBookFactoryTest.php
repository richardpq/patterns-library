<?php

namespace Tests\AbstractFactory;

use AbstractFactory\ElectronicBookFactory;

class ElectronicBookFactoryTest extends \PHPUnit_Framework_TestCase
{
    /** @var  ElectronicBookFactory $electronicBook */
    private $electronicBook;

    public function setUp()
    {
        $this->electronicBook = new ElectronicBookFactory();
    }

    public function testCreateProgrammingBook()
    {
        $programmingBook = $this->electronicBook->createProgrammingBook();

        $this->assertInstanceOf(
            'AbstractFactory\ElectronicProgrammingBook',
            $programmingBook
        );
    }

    public function testCreateLanguageBook()
    {
        $languageBook = $this->electronicBook->createLanguageBook();

        $this->assertInstanceOf(
            'AbstractFactory\ElectronicLanguageBook',
            $languageBook
        );
    }

    public function testCreateTourismBook()
    {
        $tourismBook = $this->electronicBook->createTourismBook();

        $this->assertInstanceOf(
            'AbstractFactory\ElectronicTourismBook',
            $tourismBook
        );
    }
}
