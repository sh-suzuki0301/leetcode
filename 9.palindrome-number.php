/*
 * @lc app=leetcode id=9 lang=php
 *
 * [9] Palindrome Number
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $reverseArray = array_reverse(str_split($x));
        $reverseString = implode($reverseArray);
        return $x == $reverseString ? true : false; 
    }
}
// @lc code=end

