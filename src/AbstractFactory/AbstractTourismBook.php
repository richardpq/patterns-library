<?php

namespace AbstractFactory;

use AbstractFactory\Book;

abstract class AbstractTourismBook extends Book
{
    abstract protected function getMaps();
}