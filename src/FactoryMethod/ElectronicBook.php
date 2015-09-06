<?php

namespace FactoryMethod;

use FactoryMethod\Book;

class ElectronicBook extends Book
{
    /** @var  string $downloadUrl */
    private $downloadUrl;

    /**
     * @return string
     */
    public function getDownloadUrl()
    {
        return $this->downloadUrl;
    }

    /**
     * @param string $downloadUrl
     *
     * @return ElectronicBook
     */
    public function setDownLoadUrl($downloadUrl)
    {
        $this->downloadUrl = $downloadUrl;

        return $this;
    }
}
