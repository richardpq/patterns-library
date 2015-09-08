<?php

namespace Tests\AbstractFactory;

use AbstractFactory\PaperProgrammingBook;

class PaperProgrammingBookTest extends \PHPUnit_Framework_TestCase
{
    /** @var  PaperProgrammingBook $paperProgramming */
    private $paperProgramming;

    public function setUp()
    {
        $this->paperProgramming = new PaperProgrammingBook();
    }

    public function testGetCodeExamples()
    {
        $sampleCode = $this->paperProgramming->getSamplesCodes();

        $this->assertEquals(
            'Sample code for a Paper Programming Book',
            $sampleCode
        );
    }

    public function testSetLanguage()
    {
        $language = 'PHP';

        $this->paperProgramming->setProgrammingLanguage($language);

        $this->assertEquals(
            $language,
            $this->paperProgramming->getProgrammingLanguage(),
            "Programming language didn't match"
        );
    }
}
