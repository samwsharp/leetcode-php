<?php

/**
 * Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.
 *
 * An input string is valid if:
 * Open brackets must be closed by the same type of brackets.
 * Open brackets must be closed in the correct order.
 * Every close bracket has a corresponding open bracket of the same type.
 */

namespace LeetcodePhp\ValidParentheses;

class Solution
{
    /**
     * @param String $s
     * @return Boolean
     */
    public static function isValid($s) {
        if (strlen($s) % 2 !== 0)
            return false;

        $iterations = strlen($s)/2; // we remove at least 2 characters at a time so we should only need to iterate half the string length

        for ($i = 0; $i <= $iterations; $i++) {
        	$s = preg_replace("/\(\)|\[\]|\{\}/", "", $s); // remove any "valid" parentheses
        }

        return $s === ""; // the resulting string should be blank as we've removed all parentheses
    }
}

// stack solution based off: https://leetcode.com/problems/valid-parentheses/discuss/469626/JavaScript-48-ms-faster-than-96.58
// 4.5x faster than my solution above!
class Solution2
{
    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stack = [];

        // loops through each parenthesis and pushes its closing "relative" to the stack
        // if we encounter a closing parenthesis then the last pushed item on the stack should match it
        for ($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];

            switch ($char) {
                case "(": $stack[] = ")"; break;
                case "[": $stack[] = "]"; break;
                case "{": $stack[] = "}"; break;
                default:
                    if ($char !== array_pop($stack)) return false; // last pushed doesn't match so isn't valid
            }
        }

        return !count($stack); // all items should be popped off stack to be valid
    }
}