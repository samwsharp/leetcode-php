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

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        if (count($strs) == 1)
            return $strs[0];

        // sort array by ascending string lengths
        usort($strs, function($a, $b) {
            return strlen($a) - strlen($b);
        });

        // get the smallest word and remove it from the array
        $smallest = $strs[0];
        unset($strs[0]);

        // for each character in the smallest word we'll loop
        // through the remaining words and check if the character
        // at the same index match.

        $prefix = "";
        foreach (str_split($smallest) as $key=>$char) {
            foreach ($strs as $str) {
                if ($str[$key] != $char) return $prefix;
            }

            $prefix = $prefix . $char;
        }

        return $prefix;
    }
}

$solution = new Solution();

var_dump($solution->longestCommonPrefix(["reflower","flow","flight"]));
var_dump($solution->longestCommonPrefix(["flower","flow","flight"]));
var_dump($solution->longestCommonPrefix(["aa", "a"]));
