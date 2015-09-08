<?php

namespace AbstractFactory;

use AbstractFactory\AbstractTourismBook;

class ElectronicTourismBook extends AbstractTourismBook
{
    public function getMaps()
    {
        //Maybe an interactive way to see maps in digital
        //like google maps
        return 'Maps for Electronic Tourism Book';
    }
}
