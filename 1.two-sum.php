/*
 * @lc app=leetcode id=1 lang=php
 *
 * [1] Two Sum
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $mapArray = [];

        for ($i=0; $i < count($nums); $i++) {
            $x = $target - $nums[$i];

            if (isset($mapArray[$x])) {
                return [$i,$mapArray[$x]];
            }
            $mapArray[$nums[$i]] = $i;
        }
        return [];
    }
}
// @lc code=end

