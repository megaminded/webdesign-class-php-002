<?php
// 19th March 2021
// March, 19th, 2021
// March 19, 2021
// March 19, 2021 12:00am

// $date = date('dS F Y');

$name = "Peter";
// Transforming dates
$dob = "4/19/1991";


// March 19, 2021
$date = date('M', strtotime($dob));

echo $date;

// Classwork
// Using the date function, output the age of a student in the format below
// James you're 30 years and 4 months old;