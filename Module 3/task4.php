<?php

//Multidimensional Array

function average($grades){
    
    global $gradeMap;
    
    foreach($grades as $name=>$rows){
        $sum = 0;
        echo "$name: Grade ";

        // foreach($rows as $subject=>$mark){
        //     $sum += $mark;
        // }

        $sum = array_sum($rows);
        $average = $sum/count($rows);
        
        foreach($gradeMap as $key=>$value){
            if($average >= $value){
                echo $key."\n";
                break;
            }
        }
    }
}

$gradeMap = ['A'=>90, 'B+'=>80, 'B'=>70, 'C+'=>60, 'C'=>50, 'D'=>40, 'F'=>00];

$studentGrades = [
    'Alice'=>['Math'=>30, 'English'=>30, 'Science'=>30],
    'Baron'=>['Math'=>60, 'English'=>70, 'Science'=>50],
    'Kinder'=>['Math'=>99, 'English'=>98, 'Science'=>97]
];

average($studentGrades);