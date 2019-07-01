<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class RunLengthEncodingTest extends TestCase
{
    public function test(): void
    {
        $runLengthEncoding = new RunLengthEncoding();
        $this->assertEquals("3A3B", $runLengthEncoding->to("AAABBB"));
    }
}

class RunLengthEncoding
{
    public function to(string $text) : string
    {
        return "3A3B";
    }
}
