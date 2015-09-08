<?php

namespace Tests\AbstractFactory;

use AbstractFactory\ElectronicProgrammingBook;

class ElectronicProgrammingBookTest extends \PHPUnit_Framework_TestCase
{
    /** @var  ElectronicProgrammingBook $paperProgramming */
    private $electronicProgramming;

    public function setUp()
    {
        $this->electronicProgramming = new ElectronicProgrammingBook();
    }

    public function testGetCodeExamples()
    {
        $sampleCode = $this->electronicProgramming->getSamplesCodes();

        $this->assertEquals(
            'Sample code for an Electronic Programming Book',
            $sampleCode
        );
    }

    public function testSetLanguage()
    {
        $language = 'PHP';

        $this->electronicProgramming->setProgrammingLanguage($language);

        $this->assertEquals(
            $language,
            $this->electronicProgramming->getProgrammingLanguage(),
            "Programming language didn't match"
        );
    }
}
