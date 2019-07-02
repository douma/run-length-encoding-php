<?php

namespace RunLengthEncoding;

class CommandTo extends BaseCommand
{
    public function run()
    {
        echo $this->_runLengthEncoding()->to($this->_getFirstArg()) . PHP_EOL;
    }
}
