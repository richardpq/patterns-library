<?php

namespace AbstractFactory;

use AbstractFactory\Book;

abstract class AbstractProgrammingBook extends Book
{
    /** @var  string $programmingLanguage */
    private $programmingLanguage;

    /**
     * @return mixed
     */
    abstract protected function getSamplesCodes();

    /**
     * @param string $programmingLanguage
     */
    public function setProgrammingLanguage($programmingLanguage)
    {
        $this->programmingLanguage = $programmingLanguage;
    }

    /**
     * @return string
     */
    public function getProgrammingLanguage()
    {
        return $this->programmingLanguage;
    }
}
