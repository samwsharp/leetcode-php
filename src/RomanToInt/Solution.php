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

namespace LeetcodePhp\RomanToInt;

final class Solution
{
    static private $numerals = [
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
    static public function romanToInt($s) {
        $count = 0;

        // acount for special cases
        $s = str_replace("IV", "IIII", $s);
        $s = str_replace("XL", "XXXX", $s);
        $s = str_replace("CD", "CCCC", $s);
        $s = str_replace("XC", "LXXXX", $s);
        $s = str_replace("CM", "DCCCC", $s);
        $s = str_replace("IX", "VIIII", $s);

        foreach (str_split($s) as $str) {
            $count = $count + self::$numerals[$str];
        }

        return $count;
    }
}