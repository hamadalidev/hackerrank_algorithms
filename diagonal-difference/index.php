<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr) {
   $sum1 = 0;
    $sum2 = 0;
    
    $count = count($arr[0]) - 1;
    for($out = 0; $out < count($arr[0]); $out++) {
        $sum1 = $sum1 + $arr[$out][$out];
        $sum2 = $sum2 + $arr[$out][$count];
        $count = $count - 1;
    }
    
    $big = $sum2;
    $small = $sum1;
    if($sum1 > $sum2) {
        $big = $sum1;
        $small = $sum2;
    }
    return $big - $small;
    
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
