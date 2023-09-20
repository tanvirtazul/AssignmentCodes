<?php

function evenNumbersForLoop(int $start, int $end, int $step){
    echo "For loop: \n";
    for($i=$start; $i<=$end; $i=$i+$step){
        echo $i+1, "\t";
    }
    echo "\n";
}

evenNumbersForLoop(1, 20, 2);


function evenNumbersWhileLoop(int $start, int $end, int $step){
    echo "While loop: \n";
    $i = $start;
    while($i<=$end){
        echo $i+1, "\t";
        $i=$i+$step;
    }
    echo "\n";
}

evenNumbersWhileLoop(1, 20, 2);


function evenNumbersDoWhileLoop(int $start, int $end, int $step){
    echo "Do-while loop: \n";
    $i = $start;
    do{
        echo $i+1, "\t";
        $i=$i+$step;
    }while($i<=$end);
    echo "\n";
}

evenNumbersDoWhileLoop(1, 20, 2);