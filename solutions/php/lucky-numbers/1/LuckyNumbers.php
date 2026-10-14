<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        $first = intval(implode("", $digitsOfNumber1));
        $second = intval(implode("", $digitsOfNumber2));

        return $first + $second;
    }

    public function isPalindrome(int $number): bool
    {
        $str = strval($number);
        $strrev = strrev($number);

        return $str === $strrev;
    }

    public function validate(string $input): string
    {   
        $input = trim($input);
        if ($input === "") {
            return 'Required field';
        }

        $cleanInput = preg_replace('/[-_ ]?plus$/i', '+', $input);
        $cleanInput = preg_replace('/[-_ ]?minus$/i', '-', $cleanInput);
        $cleanInput = rtrim($cleanInput, '+-');
    
        $decimalValue = null;
    
        if (preg_match('/^0[0-7]+$/', $cleanInput)) {
            $decimalValue = octdec($cleanInput);
        }
        elseif (is_numeric($cleanInput)) {
            $decimalValue = (float)$cleanInput; 
        }
    
        if (
            $decimalValue === null 
            || $decimalValue <= 0 
            || $decimalValue != floor($decimalValue)
        ) {
            return 'Must be a whole number larger than 0';
        }
    
        return '';
    }
}
