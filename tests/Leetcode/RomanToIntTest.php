<?php

use LeetcodePhp\RomanToInt\Solution;
use PHPUnit\Framework\TestCase;

final class RomanToIntTest extends TestCase
{
    public function test_can_get_int_from_roman_numerals()
    {
        $this->assertEquals(1, Solution::romanToInt("I"));
        $this->assertEquals(2, Solution::romanToInt("II"));
        $this->assertEquals(3, Solution::romanToInt("III"));
        $this->assertEquals(4, Solution::romanToInt("IV"));
        $this->assertEquals(5, Solution::romanToInt("V"));
        $this->assertEquals(6, Solution::romanToInt("VI"));
        $this->assertEquals(7, Solution::romanToInt("VII"));
        $this->assertEquals(8, Solution::romanToInt("VIII"));
        $this->assertEquals(9, Solution::romanToInt("IX"));
        $this->assertEquals(10, Solution::romanToInt("X"));
        $this->assertEquals(11, Solution::romanToInt("XI"));
        $this->assertEquals(58, Solution::romanToInt("LVIII"));
        $this->assertEquals(1994, Solution::romanToInt("MCMXCIV"));
    }
}