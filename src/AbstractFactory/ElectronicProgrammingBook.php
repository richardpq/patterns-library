<?php

namespace AbstractFactory;

use AbstractFactory\AbstractProgrammingBook;

class ElectronicProgrammingBook extends AbstractProgrammingBook
{
    public function getSamplesCodes()
    {
        //This should be replaced by a real logic about how to get the sample code
        //this could be an url to download the files
        return "Sample code for an Electronic Programming Book";
    }
}
