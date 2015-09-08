<?php

namespace AbstractFactory;

use AbstractFactory\AbstractTourismBook;

class PaperTourismBook extends AbstractTourismBook
{
    public function getMaps()
    {
        //Printed maps or a CD with Maps in PDF
        return 'Maps for Paper Tourism Book';
    }
}
