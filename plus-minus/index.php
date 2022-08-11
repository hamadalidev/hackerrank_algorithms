<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    $positive = 0;
    $nagative = 0;
    $zero = 0;
    foreach($arr as $item) {
        if($item > 0) {
            $positive++;
        } elseif($item < 0) {
            $nagative++;
        } else {
            $zero++;
        }
    }
    
    $a[] = $positive/count($arr);
    $a[] = $nagative/count($arr);
    $a[] = $zero/count($arr);
    print(number_format((float)$a[0], 6, '.', '')."\n");
    print(number_format((float)$a[1], 6, '.', '')."\n");
    print(number_format((float)$a[2], 6, '.', ''));
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
