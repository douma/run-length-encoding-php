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
        $this->assertEquals("3A3B3C1D", $runLengthEncoding->to("AAABBBCCCD"));
    }
}

class RunLengthEncoding
{
    public function to(string $text) : string
    {
        $output = "";
        $prevChar = false;
        $count = 0;
        foreach(str_split($text,1) as $char) {
            if($char !== $prevChar) {
                if($prevChar) {
                    $output .= "{$count}{$prevChar}";
                }
                $count = 1;
                $prevChar = $char;
            } else {
                $count++;
            }
            $prevChar = $char;
        }
        $output .= "{$count}{$prevChar}";
        return $output;
    }
}
