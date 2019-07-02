<?php

require_once __DIR__ . "/../../vendor/autoload.php";

$command = new \RunLengthEncoding\CommandFrom(new \RunLengthEncoding\RunLengthEncoding());
$command->run();