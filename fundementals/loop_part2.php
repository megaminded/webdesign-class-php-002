<?php
// Loop structure
// for loop
// foreach
// while
$users = [
    'James',
    'Kennedy',
    'Peter',
    "Ken"
];

$classes_of_food = [
    'vitamin' => ['Pawpaw', 'Banana', 'Cucumber'],
    'protein' => ['Beans', 'Egg', 'Meat']
];
// foreach ($users as $user) {
//     echo $user;
// }

// foreach ($classes_of_food as $class) {
//     echo print_r($class);
//     // foreach ($class as $food) {
//     //     echo $food;
//     // }
// }
foreach ($classes_of_food as $key => $value) {
    echo $key;
}

$array = [
    'even' => [2, 4, 6, 8],
    'odd'  => []
];