<?php

namespace AbstractFactory;

use AbstractFactory\AbstractProgrammingBook;

class PaperProgrammingBook extends AbstractProgrammingBook
{
    /**
     * @inheritDoc
     */
    public function getSamplesCodes()
    {
        //This should be replaced by a real logic about how to get the sample code
        //this could be a CD
        return "Sample code for a Paper Programming Book";
    }
}
