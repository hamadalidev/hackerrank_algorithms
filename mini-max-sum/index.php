<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    $maxKey = 0;
    $minKey = 0;
    foreach($arr as $key => $item) {
        if($arr[$maxKey] < $item) {
            $maxKey = $key;
        }
        
        if($arr[$minKey] > $item) {
            $minKey = $key;
        }
    }
    
    $sum1 = 0;
    $sum2 = 0;
    foreach($arr as $key => $item) {
        if($key != $minKey ) {
            $sum1 = $sum1 + $item; 
        } 
        
        if($key != $maxKey ) {
            $sum2 = $sum2 + $item ;
        } 
    }
    echo $sum2 . " " . $sum1;
}

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);
