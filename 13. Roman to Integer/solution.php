<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $table = [
            "I" => 1,
            "V" => 5,
            "X" => 10,
            "L" => 50,
            "C" => 100,
            "D" => 500,
            "M" => 1000,
        ];

        $fornines = [
            "IV" => 4,
            "IX" => 9,
            "XL" => 40,
            "XC" => 90,
            "CD" => 400,
            "CM" => 900,
        ];
        
        $acc = 0;
        for($i = 0;$i<strlen($s);$i++){
            if(isset($s[$i+1]) && in_array($s[$i].$s[$i+1],array_keys($fornines))){
                $acc += $fornines[$s[$i].$s[$i+1]];
                $i++;
                continue;
            }
            $acc += $table[$s[$i]];
        }
        return $acc;
    }
}

$solution = new Solution();
echo $solution->romanToInt("III") . "\n"; // Output: 3
echo $solution->romanToInt("IV") . "\n"; // Output: 4
echo $solution->romanToInt("IX") . "\n"; // Output: 9
echo $solution->romanToInt("MCMXCIV"); // Example usage


