<?php

namespace FactoryMethod;

use FactoryMethod\Book;

class PaperBook extends Book
{
    /** @var string $hall */
    private $hall;
    /** @var string shelf */
    private $shelf;

    /**
     * @return string
     */
    public function getHall()
    {
        return $this->hall;
    }

    /**
     * @param string $hall
     */
    public function setHall($hall)
    {
        $this->hall = $hall;
    }

    /**
     * @return string
     */
    public function getShelf()
    {
        return $this->shelf;
    }

    /**
     * @param string $shelf
     */
    public function setShelf($shelf)
    {
        $this->shelf = $shelf;
    }
}
