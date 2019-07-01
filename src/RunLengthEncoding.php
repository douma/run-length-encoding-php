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
        $prevChar = false;
        $count = "0";
        $output = "";
        foreach(str_split($text,1) as $char) {
            if((int) $char > 0 && (int) $prevChar > 0) {
                $count .= $prevChar;
                $prevChar = $char;
                continue;
            } elseif((int) $char > 0) {
                $count = $char;
                $prevChar = $char;
                continue;
            }
            $output .= str_pad("", (int) $count, $char);
            $prevChar = $char;
        }

        return $output;
    }
}
