<?php

require_once __DIR__ . "/../../vendor/autoload.php";

$command = new \RunLengthEncoding\CommandTo(new \RunLengthEncoding\RunLengthEncoding());
$command->run();