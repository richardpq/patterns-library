<?php

namespace FactoryMethod;

use FactoryMethod\BookFactoryInterface;
use FactoryMethod\PaperBook;

class PaperBookFactory implements BookFactoryInterface
{
    /**
     * @return \FactoryMethod\PaperBook
     */
    public function createBook()
    {
        return new PaperBook();
    }
}
