<?php

namespace AbstractFactory;

use AbstractFactory\BookFactoryInterface;
use AbstractFactory\ElectronicLanguageBook;
use AbstractFactory\ElectronicProgrammingBook;
use AbstractFactory\ElectronicTourismBook;

class ElectronicBookFactory implements BookFactoryInterface
{
    /**
     * @inheritDoc
     */
    public function createProgrammingBook()
    {
        return new ElectronicProgrammingBook();
    }

    /**
     * @inheritDoc
     */
    public function createLanguageBook()
    {
        return new ElectronicLanguageBook();
    }

    /**
     * @inheritDoc
     */
    public function createTourismBook()
    {
        return new ElectronicTourismBook();
    }
}
