<?php
$gender = "Female";
// switch ($gender) {
//     case 'Male':
//         echo "Good morning sir";
//         break;
//     case 'Female':
//         echo "Good morning ma!";
//         break;
//     default:
//         echo "We understand your request";
//         break;
// }

$age = 13;
switch ($age) {
    case $age >= 18:
        echo "You are an adult!";
        break;
    case 13:
    case 14:
    case 15:
    case 16:
    case 17:
        echo "You are a teenager";
        break;
    case (($age < 13) && is_int($age)):
        echo "You are still a child";
        break;
    default:
        echo "We do not understand your request";
        break;
}