<?php

use LeetcodePhp\ValidPalindrome\Solution;
use PHPUnit\Framework\TestCase;

final class ValidPalindromeTest extends TestCase
{
    public function test_can_get_valid_palindrome()
    {
        $this->assertTrue(Solution::isPalindrome("A man, a plan, a canal: Panama"));
        $this->assertTrue(Solution::isPalindrome(" "));

        $this->assertFalse(Solution::isPalindrome("race a car"));
    }
}