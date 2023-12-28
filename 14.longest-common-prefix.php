/*
 * @lc app=leetcode id=14 lang=php
 *
 * [14] Longest Common Prefix
 */

// @lc code=start
class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $output = $strs[0];
        for ($i = 1; $i < count($strs); $i++) {
            $str = $strs[$i];
            while (substr($str, 0, strlen($output)) != $output && strlen($output) > 0)
                $output = substr($output, 0, strlen($output) - 1);
        }
        return $output;
    }
}
// @lc code=end

