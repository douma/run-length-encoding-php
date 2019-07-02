<?php

namespace RunLengthEncoding;

class CommandFrom
{
    private $runLengthEncoding;

    public function __construct(RunLengthEncoding $runLengthEncoding)
    {
        $this->runLengthEncoding = $runLengthEncoding;
    }

    public function run()
    {
        if(!isset($_SERVER['argv'][1])) {
            echo "Please provide a text" . PHP_EOL;
            exit;
        }

        echo $this->runLengthEncoding->from($_SERVER['argv'][1]) . PHP_EOL;
    }
}
