<?php

namespace AbstractFactory;

use AbstractFactory\BookFactoryInterface;
use AbstractFactory\PaperLanguageBook;
use AbstractFactory\PaperProgrammingBook;
use AbstractFactory\PaperTourismBook;

class PaperBookFactory implements BookFactoryInterface
{
    /**
     * @inheritDoc
     */
    public function createProgrammingBook()
    {
        return new PaperProgrammingBook();
    }

    /**
     * @inheritDoc
     */
    public function createLanguageBook()
    {
        return new PaperLanguageBook();
    }

    /**
     * @inheritDoc
     */
    public function createTourismBook()
    {
        return new PaperTourismBook();
    }
}
