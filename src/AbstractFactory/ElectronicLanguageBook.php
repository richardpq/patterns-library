<?php

namespace AbstractFactory;

use AbstractFactory\AbstractLanguageBook;

class ElectronicLanguageBook extends AbstractLanguageBook
{
    public function getAudioFiles()
    {
        //This should be replaced by a real logic about how to get the audio files
        //this could be an url to download the files
        return 'Audio Files for an Electronic Language Book';
    }
}
