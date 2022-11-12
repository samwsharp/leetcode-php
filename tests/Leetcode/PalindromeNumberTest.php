<?php

use LeetcodePhp\PalindromeNumber\Solution;
use PHPUnit\Framework\TestCase;

final class PalindromeNumberTest extends TestCase
{
    public function test_can_get_palindrome_number()
    {
        $this->assertTrue(Solution::isPalindrome(121));
        $this->assertTrue(Solution::isPalindrome(1991));
        $this->assertTrue(Solution::isPalindrome(0));

        $this->assertFalse(Solution::isPalindrome(120));
        $this->assertFalse(Solution::isPalindrome(10));
        $this->assertFalse(Solution::isPalindrome(-101));
    }
}