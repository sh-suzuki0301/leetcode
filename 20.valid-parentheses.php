/*
 * @lc app=leetcode id=20 lang=php
 *
 * [20] Valid Parentheses
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $map = [
            '(' => ')',
            '{' => '}',
            '[' => ']'
        ];

        $stack = [];
        for ($i=0; $i < strlen($s); $i++) {
            if ($map[$s[$i]]) {
                $stack[] = $map[$s[$i]];
                continue;
            }
            if (array_pop($stack) !== $s[$i]) {
                return false;
            }
        }
        return empty($stack);
    }
}
// @lc code=end

