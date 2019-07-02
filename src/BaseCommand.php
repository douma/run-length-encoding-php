<?php

namespace RunLengthEncoding;

abstract class BaseCommand
{
    private $runLengthEncoding;

    public function __construct(RunLengthEncoding $runLengthEncoding)
    {
        $this->runLengthEncoding = $runLengthEncoding;
    }

    protected function _runLengthEncoding()
    {
        return $this->runLengthEncoding;
    }

    protected function _getFirstArg()
    {
        if(!isset($_SERVER['argv'][1])) {
            echo "Please provide a text" . PHP_EOL;
            exit;
        }
        return $_SERVER['argv'][1];
    }

    abstract public function run();
}
