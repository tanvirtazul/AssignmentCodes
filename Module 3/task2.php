<?php

// array manipulation

function removeEvenNumbers($numbers){
    //print_r($numbers);
    $size = count($numbers);
    for($i=0; $i<$size; $i++){
        if($numbers[$i] % 2 == 0)
            unset($numbers[$i]);
        else
            continue;
    }
    print_r($numbers);
    //echo count($numbers);
}

$numbers = array(1,2,3,4,5,6,7,8,9,10);
removeEvenNumbers($numbers);