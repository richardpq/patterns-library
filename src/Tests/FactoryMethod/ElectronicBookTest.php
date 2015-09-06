<?php

namespace Tests\FactoryMethod;

use FactoryMethod\ElectronicBook;

class ElectronicBookTest extends \PHPUnit_Framework_TestCase
{
    /** @var  ElectronicBook $electronicBook */
    private $electronicBook;

    public function setUp()
    {
        $this->electronicBook = new ElectronicBook();
    }

    public function testSetDownloadUrl()
    {
        $downloadUrl = "http://fake.address.com";

        $this->electronicBook->setDownLoadUrl($downloadUrl);

        $this->assertEquals($downloadUrl, $this->electronicBook->getDownloadUrl(), "Set download url fail");
    }
}
