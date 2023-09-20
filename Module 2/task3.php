<?php

$quantity = 13;//change here

$first_number = 0;
$second_number = 1;
echo $first_number, "\t";
echo $second_number, "\t";

for($count = 2; $count < $quantity; $count++){
    $sum = $first_number + $second_number;
    if($sum > 100)
        break;
    echo $sum, "\t";
    $first_number = $second_number;
    $second_number = $sum;
}
