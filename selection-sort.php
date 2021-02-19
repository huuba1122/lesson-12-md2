<?php
/**     swap-position  */

function swapPosition($arr, $left, $right){
    $temp = $arr[$right];
    $arr[$right] = $arr[$left];
    $arr[$left] = $temp;
    return $arr;
}

/** selection sort  */

function selectionSort($arr){
    for ($i = 0; $i < count($arr); $i++){
        $min = $i;
        for ($j = $i + 1; $j < count($arr); $j++){
            if ($arr[$j]<$arr[$i]){
                $min = $j;
            }
        }
        $arr = swapPosition($arr, $i, $min);
    }
    return $arr;
}
$newArray = [1,9,4.5,6.6,5.7,-4.5];
print_r(selectionSort($newArray));