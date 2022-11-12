<?php

use LeetcodePhp\LongestCommonPrefix\Solution;
use PHPUnit\Framework\TestCase;

final class LongestCommonPrefixTest extends TestCase
{
    public function test_can_get_longest_common_prefix()
    {
        $this->assertEquals("fl", Solution::longestCommonPrefix(["flower","flow","flight"]));
        $this->assertEquals("a", Solution::longestCommonPrefix(["aa", "a"]));
        $this->assertEquals("ab", Solution::longestCommonPrefix(["abab","aba","abc"]));
        $this->assertEquals("", Solution::longestCommonPrefix(["dog","racecar","car"]));
        $this->assertEquals("", Solution::longestCommonPrefix(["reflower","flow","flight"]));
    }
}