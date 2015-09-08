<?php

namespace Tests\AbstractFactory;

use AbstractFactory\PaperBookFactory;

class PaperBookFactoryTest extends \PHPUnit_Framework_TestCase
{
    /** @var  PaperBookFactory $paperBook */
    private $paperBook;

    public function setUp()
    {
        $this->paperBook = new PaperBookFactory();
    }

    public function testCreateProgrammingBook()
    {
        $programmingBook = $this->paperBook->createProgrammingBook();

        $this->assertInstanceOf(
            'AbstractFactory\PaperProgrammingBook',
            $programmingBook
        );
    }

    public function testCreateLanguageBook()
    {
        $languageBook = $this->paperBook->createLanguageBook();

        $this->assertInstanceOf(
            'AbstractFactory\PaperLanguageBook',
            $languageBook
        );
    }

    public function testCreateTourismBook()
    {
        $tourismBook = $this->paperBook->createTourismBook();

        $this->assertInstanceOf(
            'AbstractFactory\PaperTourismBook',
            $tourismBook
        );
    }
}
