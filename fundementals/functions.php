<?php
// Required parameters or arguments
function add($num1, $num2, $num3, $num4) {
    return $num1+$num2+$num3+$num4;
}
function add_version2($values){
    $index = 0;
    $total = 0;
    // while ($index < count($values)) {
    //     $total = $total + $values[$index]; 
    //     $index++;
    // }
    for ($i=0; $i < count($values); $i++) { 
        $total = $total + $values[$i];
    }
    return $total;
}
echo add_version2([1,2,5,9,100]);
exit;

// echo add(4,5, 2, 3);
// Optional parameters or arguments
function power($base, $expo = 2){
    // return $base ** $expo;
    return pow($base, $expo);
}
echo power(5, 6);

// Assignment
/** Write a function that adds the values of even numbers between 1 to 1000 */