<?php

/**
 * A phrase is a palindrome if, after converting all uppercase letters into lowercase letters and removing all
 * non-alphanumeric characters, it reads the same forward and backward. Alphanumeric characters include letters and numbers.
 * Given a string s, return true if it is a palindrome, or false otherwise.
 */

namespace LeetcodePhp\ValidPalindrome;

class Solution
{
    /**
     * @param String $s
     * @return Boolean
     */
    public static function isPalindrome($s) {
        $s = preg_replace("/[^a-z0-9]/", "", strtolower($s));
        return $s === strrev($s);
    }
}