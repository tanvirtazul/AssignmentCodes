<?php

function fibonacci($n){
        $first_number = 0;
        $second_number = 1;
        echo $first_number, "\t";
        echo $second_number, "\t";

        for($count = 2; $count < $n; $count++){
            $sum = $first_number + $second_number;
            echo $sum, "\t";
            $first_number = $second_number;
            $second_number = $sum;
        }
    }

    fibonacci(15);