<?php

class Solution
{
    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $s = preg_replace("/[^a-z0-9]/", "", strtolower($s));
        return $s === strrev($s);
    }
}

$solution = new Solution();

var_dump($solution->isPalindrome("A man, a plan, a canal: Panama"));
var_dump($solution->isPalindrome("race a car"));
var_dump($solution->isPalindrome(" "));
