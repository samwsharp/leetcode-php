<?php

/**
 * Given a roman numeral, convert it to an integer.
 *
 * Example 1:
 * Input: s = "III"
 * Output: 3
 * Explanation: III = 3.
 *
 * Example 2:
 * Input: s = "LVIII"
 * Output: 58
 * Explanation: L = 50, V= 5, III = 3.
 *
 * Example 3:
 * Input: s = "MCMXCIV"
 * Output: 1994
 * Explanation: M = 1000, CM = 900, XC = 90 and IV = 4.
 */

class Solution
{
    private $numerals = [
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000,
    ];

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $count = 0;

        // acount for special cases
        $s = str_replace("IV", "IIII", $s);
        $s = str_replace("XL", "XXXX", $s);
        $s = str_replace("CD", "CCCC", $s);
        $s = str_replace("XC", "LXXXX", $s);
        $s = str_replace("CM", "DCCCC", $s);
        $s = str_replace("IX", "VIIII", $s);

        foreach (str_split($s) as $str) {
            $count = $count + $this->numerals[$str];
        }

        return $count;
    }
}

$solution = new Solution();
var_dump($solution->romanToInt("I")); // 1
var_dump($solution->romanToInt("II")); // 2
var_dump($solution->romanToInt("III")); // 3
var_dump($solution->romanToInt("IV")); // 4
var_dump($solution->romanToInt("V")); // 5
var_dump($solution->romanToInt("VI")); // 6
var_dump($solution->romanToInt("VII")); // 7
var_dump($solution->romanToInt("VIII")); // 8
var_dump($solution->romanToInt("IX")); // 9
var_dump($solution->romanToInt("X")); // 10
var_dump($solution->romanToInt("XI")); // 11
var_dump($solution->romanToInt("LVIII")); // 58
var_dump($solution->romanToInt("MCMXCIV")); // 1994