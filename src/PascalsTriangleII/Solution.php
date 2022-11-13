<?php

namespace LeetcodePhp\PascalsTriangleII;

use LeetcodePhp\PascalsTriangle\Solution as PascalsTriangle;

final class Solution
{
    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    public static function getRow($rowIndex = null)
    {
        if ($rowIndex === null)
            return null;

        return PascalsTriangle::generate($rowIndex+1)[$rowIndex];
    }
}
