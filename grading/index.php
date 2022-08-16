<?php

/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */

function gradingStudents($grades) {
  
  $a = [];
    foreach($grades as $grade) {
        $re = $grade % 5;
        $re = 5 - $re;
        echo $re;
        if($re <= 2) {
           $new = $grade + $re;
           if($new >= 40) {
            //    echo $new."\n";
               $a[] = $new;
           } else {
               $a[] = $grade;
            //    echo $grade."\n";
           }
           
        } else {
            $a[] = $grade;
        }
    }
    return $a;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$grades_count = intval(trim(fgets(STDIN)));

$grades = array();

for ($i = 0; $i < $grades_count; $i++) {
    $grades_item = intval(trim(fgets(STDIN)));
    $grades[] = $grades_item;
}

$result = gradingStudents($grades);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
