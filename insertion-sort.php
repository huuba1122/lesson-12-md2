<?php

function insertionSort($arr){
    for ($i = 0; $i < count($arr); $i++){
        $temp = $arr[$i];
        $j = $i;

        while($j > 0 && $arr[$j -1] < $temp){
            $arr[$j] = $arr[$j-1];
            $j--;
        }
        $arr[$j] = $temp;
    }
    return $arr;
}

$newArray = [5,-4,3,7,2,1,0,8,9,2];
echo "<pre>";
print_r(insertionSort($newArray));