<?php

/**
 * Given an integer x, return true if x is a palindrome, and false otherwise.
 *
 * Example 1:
 * Input: x = 121
 * Output: true
 * Explanation: 121 reads as 121 from left to right and from right to left.
 *
 * Example 2:
 * Input: x = -121
 * Output: false
 * Explanation: From left to right, it reads -121. From right to left, it becomes 121-. Therefore it is not a palindrome.
 *
 * Example 3:
 * Input: x = 10
 * Output: false
 * Explanation: Reads 01 from right to left. Therefore it is not a palindrome.
 */

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

$solution = new Solution();
var_dump($solution->isPalindrome(40)); // false
var_dump($solution->isPalindrome(121)); // true