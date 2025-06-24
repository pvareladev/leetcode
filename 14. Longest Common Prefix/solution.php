<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $lstrs = count($strs);
        $lstr0 = strlen($strs[0]);
        $len = 0;

        // Letters
        for($l=0;$l<$lstr0;$l++){
            // Strings
            for($s=1;$s<$lstrs;$s++){
                if($strs[0][$l] !== $strs[$s][$l]){
                    return substr($strs[0],0,$len);
                }
            }
            $len++;
        }
        return $strs[0];
    }
}