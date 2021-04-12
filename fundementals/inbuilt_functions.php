<?php
$users = ['Emeke', 'Peters'];
// They are logics built into the language to help us carry a specific operation
# Help us count every elements in the array
// echo count($users);

// $items = 0;
// foreach ($users as $key => $value) {
//     $items++;
// }
// echo $items;

# Help us add elements in the end of an array 
// array_push($users, 'James');

$sentence  = 'This is a welcome message';
# Helps us get the length of a string
$length = strlen($sentence);
// echo $length;
// Compare two string
$string1 = "Hello";
$string2 = "Hello";
// $result = strcmp($string1, $string2);

// Check for the position of specified letter in a string
$word = "Elephant";
// $result = strpos($word, 't');

// Returns the replace of a character in a string
$sentence = 'This is a rugged guy';
// $result = str_replace('rugged', 'handsome', $sentence);


$name  = "Ebube";
// $result = strrev($name);

$answer = 2;

$result = exp($answer);

// $va = "" == "";
$uppercase = strtoupper($sentence);

// echo $uppercase;

$lowercase = strtolower($sentence);

// echo $lowercase;
echo $result;