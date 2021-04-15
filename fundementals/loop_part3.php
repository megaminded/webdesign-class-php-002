<?php
$items = range(1, 20);
// echo count($items);

// exit;
// print_r($items);

// foreach ($items as $key => $value) {
//     echo $value;
// }

$iteration = 0;
while ($iteration < count($items)) {
    echo $items[$iteration];
    $iteration++;
}

// while (True) {
//     echo "Downloading...";
// }