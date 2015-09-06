<?php

namespace FactoryMethod;

use FactoryMethod\BookFactoryInterface;
use FactoryMethod\ElectronicBook;

class ElectronicBookFactory implements BookFactoryInterface
{
    /**
     * @return \FactoryMethod\ElectronicBook
     */
    public function createBook()
    {
        return new ElectronicBook();
    }
}
