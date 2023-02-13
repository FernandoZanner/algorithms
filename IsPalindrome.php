<?php
/**
 * Given an integer x, return true if x is a palindrome, and false otherwise.
 * Input: x = 121
 * Output: true
 * Explanation: 121 reads as 121 from left to right and from right to left.
 */
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        return ($x === (int)strrev($x) ? true : false);
    }
}
