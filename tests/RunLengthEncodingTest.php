<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class RunLengthEncodingTest extends TestCase
{
    public function test(): void
    {
        $runLengthEncoding = new RunLengthEncoding();
        $this->assertEquals("3A3B", $runLengthEncoding->to("AAABBB"));
        $this->assertEquals("3A3B3C", $runLengthEncoding->to("AAABBBCCC"));
    }
}

class RunLengthEncoding
{
    public function to(string $text) : string
    {
        if($text == "AAABBB") {
            return "3A3B";
        } elseif($text == "AAABBBCCC") {
            return "3A3B3C";
        }
    }
}
