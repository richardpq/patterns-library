<?php

namespace Tests\AbstractFactory;

use AbstractFactory\PaperLanguageBook;

class PaperLanguageBookTest extends \PHPUnit_Framework_TestCase
{
    /** @var  PaperLanguageBook $paperLanguage */
    private $paperLanguage;

    public function setUp()
    {
        $this->paperLanguage = new PaperLanguageBook();
    }

    public function testGetAudioFiles()
    {
        $audioFiles = $this->paperLanguage->getAudioFiles();

        $this->assertEquals(
            'Audio Files for a Paper Language Book',
            $audioFiles
        );
    }

    public function testSetLanguage()
    {
        $language = 'Spanish';

        $this->paperLanguage->setLanguage($language);

        $this->assertEquals(
            $language,
            $this->paperLanguage->getLanguage(),
            "Language didn't match"
        );
    }
}
