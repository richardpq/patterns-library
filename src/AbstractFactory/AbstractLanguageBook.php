<?php

namespace AbstractFactory;

use AbstractFactory\Book;

abstract class AbstractLanguageBook extends Book
{
    /** @var  string $language */
    private $language;

    abstract protected function getAudioFiles();

    /**
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }
}