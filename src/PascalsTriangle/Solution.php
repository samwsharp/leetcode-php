<?php

namespace LeetcodePhp\PascalsTriangle;

final class Solution
{
    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    public static function generate($numRows)
    {
        if (! $numRows) return [];

        $result = [ [1] ];

        for ($i = 1; $i < $numRows; $i++) {
            $mid = [];

            // The sum of the two numbers in the previous array
            for ($c = 0; $c < count($result[$i-1])-1; $c++) {
                $mid[] = $result[$i-1][$c] + $result[$i-1][$c+1];
            }

            $result[] = [1, ...$mid, 1];
        }

        return $result;
    }
}