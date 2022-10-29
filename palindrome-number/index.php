<?php

class Solution
{
    /**
     * @param Integer $num
     * @return Boolean
     */
    function isPalindrome($num) {
    	if ($num < 0) return false;

    	$array = array_map('intval', str_split($num));
    	return array_reverse($array) === $array;
    }
}

var_dump((new Solution)->isPalindrome(40)); // false
var_dump((new Solution)->isPalindrome(121)); // true