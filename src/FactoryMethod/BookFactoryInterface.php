<?php

namespace FactoryMethod;

interface BookFactoryInterface
{
    /**
     * @return BookFactoryInterface
     */
    public function createBook();
}