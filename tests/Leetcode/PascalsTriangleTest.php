<?php

use LeetcodePhp\PascalsTriangle\Solution;
use PHPUnit\Framework\TestCase;

final class PascalsTriangleTest extends TestCase
{
    public function test_can_get_pascals_triangle()
    {
        $this->assertEquals([], Solution::generate(0));
        $this->assertEquals([[1]], Solution::generate(1));
        $this->assertEquals([[1],[1,1]], Solution::generate(2));
        $this->assertEquals([[1],[1,1],[1,2,1]], Solution::generate(3));
        $this->assertEquals([[1],[1,1],[1,2,1],[1,3,3,1]], Solution::generate(4));
        $this->assertEquals([[1],[1,1],[1,2,1],[1,3,3,1],[1,4,6,4,1]], Solution::generate(5));
        $this->assertEquals([[1],[1,1],[1,2,1],[1,3,3,1],[1,4,6,4,1],[1,5,10,10,5,1]], Solution::generate(6));
    }
}