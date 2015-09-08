<?php

namespace AbstractFactory;

interface BookFactoryInterface
{
    /**
     * @return BookFactoryInterface
     */
    public function createProgrammingBook();

    /**
     * @return BookFactoryInterface
     */
    public function createLanguageBook();

    /**
     * @return BookFactoryInterface
     */
    public function createTourismBook();
}
