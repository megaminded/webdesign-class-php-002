<?php
$students = [
    'Favour',
    'Ahmed',
    'Marvelous',
    'Ekene'
];

// Elements in an Array can be added to the end of it
array_push($students, 'Christian');
// var_dump($students);

// Items in an array can be counted
$elements = count($students);

// echo $elements;


// Items in an array can be targeted or selected using its index
// Arrays in zero indexed
$student1 = $students[0];

echo $student1;

// Make sure that we dont use an index of an item that doesn't exist'

$studentX = $students[5];

echo $studentX;