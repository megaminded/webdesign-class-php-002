<?php
// && = And
// || = Or
$age = 18;
$registered = true;

$adult = $age >= 18;

$accepted = $registered && $adult;

// var_dump($accepted);


$staff_child = true;
$paid_school_fees = false;

$accepted = $staff_child || $paid_school_fees;

// var_dump($accepted);

if (!$staff_child) {
    echo "Is a staff child";
} else {
    echo "Is not a staff child";
}

// Classwork,
// Write a program that will Accept only adults that are not staff child, but has paid school fee