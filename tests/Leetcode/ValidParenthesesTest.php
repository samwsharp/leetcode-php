<?php

use LeetcodePhp\ValidParentheses\Solution;
use PHPUnit\Framework\TestCase;

final class ValidParenthesesTest extends TestCase
{
    public function test_can_get_valid_parentheses()
    {
        $this->assertTrue(Solution::isValid("([])"));
        $this->assertTrue(Solution::isValid("(([]){})"));

        $this->assertFalse(Solution::isValid("({{{{}}}))"));
    }
}