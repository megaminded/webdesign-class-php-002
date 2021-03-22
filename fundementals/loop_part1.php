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


// for ($i = 0; $i < 100; $i++) {
//     echo $i . ",";
// }
// echo $users[3]
// echo count($users);
// exit;
for ($i = 0; $i < count($users); $i++) {
    echo $users[$i];
}

// Assignment
// Echo Numbers between 1000 and 2000 that are divisible by 10