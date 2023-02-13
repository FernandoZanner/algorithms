<?php
/**
 * Given an array of integers nums and an integer target, 
 * return indices of the two numbers such that they add up to target.
 * You may assume that each input would have exactly one solution, and you may not use the same element twice.
 * You can return the answer in any order.
 * 
 * Example:
 * Input: nums = [3,2,4], target = 6
 * Output: [1,2]
 */
class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $return = [];
        $total = count($nums);
        for ($i=0; $i<$total; $i++) {
            for ($x=0; $x<$total; $x++) {
                if ($i == $x) {
                    continue;
                }
                elseif (($nums[$i] + $nums[$x]) == $target) {
                    $return = [$i,$x];
                }
            }
        }
        return $return;
    }
}

class BestSolution {
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $hashMap = [];
        $count = count($nums);
        for ($i=0; $i<$count; $i++) {
            $secondIndex = $target-$nums[$i];
            if (isset($hashMap[$secondIndex])) {
                return array($i,$hashMap[$secondIndex]);
            } else {
                $hashMap[$nums[$i]] = $i;
            }
        }
        return [];
    }    
}
