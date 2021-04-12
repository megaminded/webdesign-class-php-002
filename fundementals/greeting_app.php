<?php

$time = "30:56 AM";

$hour = date('H', strtotime($time));
$meridian = date('A', strtotime($time));
echo $hour;
if ($hour != 00) {
    switch ($meridian) {
        case 'PM':
            if ($hour >= 12 && $hour <= 16) {
                echo "Good afternoon";
            } else {
                if ($hour >= 17 && $hour <= 19) {
                    echo "Good evening";
                } else {
                    echo "Goodnight";
                }
            }

            break;
        case 'AM':
            echo "Good morning";
            break;
        default:
            # code...
            break;
    }
} else {
    echo "Invalid date";
}