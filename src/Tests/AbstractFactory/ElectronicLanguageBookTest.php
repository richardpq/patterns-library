<?php

namespace Tests\AbstractFactory;

use AbstractFactory\ElectronicLanguageBook;

class ElectronicLanguageBookTest extends \PHPUnit_Framework_TestCase
{
    /** @var  ElectronicLanguageBook $electronicLanguage */
    private $electronicLanguage;

    public function setUp()
    {
        $this->electronicLanguage = new ElectronicLanguageBook();
    }

    public function testGetAudioFiles()
    {
        $audioFiles = $this->electronicLanguage->getAudioFiles();

        $this->assertEquals(
            'Audio Files for an Electronic Language Book',
            $audioFiles
        );
    }

    public function testSetLanguage()
    {
        $language = 'Spanish';

        $this->electronicLanguage->setLanguage($language);

        $this->assertEquals(
            $language,
            $this->electronicLanguage->getLanguage(),
            "Language didn't match"
        );
    }
}
