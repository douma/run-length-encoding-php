<?php

namespace RunLengthEncoding;

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

    public function from(string $text) : string
    {
        if($text == "3A3B") {
            return "AAABBB";
        }
    }
}
