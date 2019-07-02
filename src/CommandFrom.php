<?php

namespace RunLengthEncoding;

class CommandFrom extends BaseCommand
{
    public function run()
    {
        echo $this->_runLengthEncoding()->from($this->_getFirstArg()) . PHP_EOL;
    }
}
