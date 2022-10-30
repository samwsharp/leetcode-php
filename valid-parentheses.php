<?php

/*
 * Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.
 *
 * An input string is valid if:
 * Open brackets must be closed by the same type of brackets.
 * Open brackets must be closed in the correct order.
 * Every close bracket has a corresponding open bracket of the same type.
 */

class Solution
{
    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        if (strlen($s) % 2 !== 0)
            return false;

        $iterations = strlen($s)/2; // we remove at least 2 characters at a time so we should only need to iterate half the string length

        for ($i = 0; $i <= $iterations; $i++) {
        	$s = preg_replace("/\(\)|\[\]|\{\}/", "", $s); // remove any "valid" parentheses
        }

        return $s === ""; // the resulting string should be blank as we've removed all parentheses
    }
}

$solution = new Solution();
var_dump($solution->isValid("({{{{}}}))")); // false
var_dump($solution->isValid("([])")); // true
var_dump($solution->isValid("(([]){})")); // true