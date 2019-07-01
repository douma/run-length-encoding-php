<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class RunLengthEncodingTest extends TestCase
{
    public function test_to(): void
    {
        $runLengthEncoding = new \RunLengthEncoding\RunLengthEncoding();
        $this->assertEquals("3A3B", $runLengthEncoding->to("AAABBB"));
        $this->assertEquals("3A3B3C", $runLengthEncoding->to("AAABBBCCC"));
        $this->assertEquals("3A3B3C1D", $runLengthEncoding->to("AAABBBCCCD"));
        $this->assertEquals('12W1B12W3B24W1B14W',
            $runLengthEncoding->to("WWWWWWWWWWWWBWWWWWWWWWWWWBBBWWWWWWWWWWWWWWWWWWWWWWWWBWWWWWWWWWWWWWW"));
    }

    public function test_from()
    {
        $runLengthEncoding = new \RunLengthEncoding\RunLengthEncoding();
        $this->assertEquals("AAABBB", $runLengthEncoding->from("3A3B"));
    }
}
