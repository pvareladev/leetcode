<?php

class Solution {

    /**
     * @param int[] $nums
     * @param int $target
     * @return int[]
     */
    function twoSum($nums, $target) {
        foreach($nums as $index => $value){
            unset($nums[$index]);
            if(in_array($target - $value,$nums)) return [$index, array_search($target - $value,$nums)];
        }
        return [];
    }
}