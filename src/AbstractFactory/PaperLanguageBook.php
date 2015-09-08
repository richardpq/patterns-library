<?php

namespace AbstractFactory;

use AbstractFactory\AbstractLanguageBook;

class PaperLanguageBook extends AbstractLanguageBook
{
    /**
     * @inheritDoc
     */
    public function getAudioFiles()
    {
        //This should be replaced by a real logic about how to get the audio files
        //this could be a CD
        return "Audio Files for a Paper Language Book";
    }
}
