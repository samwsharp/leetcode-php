<?php

use LeetcodePhp\PascalsTriangleII\Solution;
use PHPUnit\Framework\TestCase;

final class PascalsTriangleIITest extends TestCase
{
    public function test_can_get_pascals_triangle_ii()
    {
        $this->assertEquals([1], Solution::getRow(0));
        $this->assertEquals([1,1], Solution::getRow(1));
        $this->assertEquals([1,2,1], Solution::getRow(2));
        $this->assertEquals([1,3,3,1], Solution::getRow(3));

        $this->assertNull(Solution::getRow());
    }
}
