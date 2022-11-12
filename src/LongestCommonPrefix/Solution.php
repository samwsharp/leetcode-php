<?php
/**
 * Write a function to find the longest common prefix string amongst an array of strings.
 * If there is no common prefix, return an empty string "".
 *
 * Example 1:
 * Input: strs = ["flower","flow","flight"]
 * Output: "fl"

 * Example 2:
 * Input: strs = ["dog","racecar","car"]
 * Output: ""
 * Explanation: There is no common prefix among the input strings.
 */

namespace LeetcodePhp\LongestCommonPrefix;

class Solution
{
    /**
     * @param String[] $strs
     * @return String
     */
    public static function longestCommonPrefix($strs)
    {
        $ac = count($strs);
        if (!$strs || !$ac) return "";

        sort($strs);

        $first = $strs[0];
        $last = $strs[$ac-1];

        $c = 0;

        // compare the first and last elements (the most different)
        while ($c < strlen($first)) {
            if ($first[$c] !== $last[$c]) break;
            $c++;
        }

        return substr($first, 0, $c);
    }
}