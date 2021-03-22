<?php
$traveling_bag = [
    'school_bag' => ['pencil' => [
        'HB', '2B', '4B'
    ], 'pen', 'ruler'],
    'food_stuff' => ['Beans', 'Rice', 'Banana'],
    'shoe'
];

// Accessing dimensional arrays

$pencil = $traveling_bag['school_bag']['pencil'];

var_dump($pencil);