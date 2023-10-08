<?php

//Password generator

function generatePassword($length){
    $lowerCase = 'abcdefghijklmnopqrstuvwxyz';
    $upperCase = strtoupper($lowerCase);
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $allChars = $lowerCase.$upperCase.$numbers.$specialChars;

    $password = $lowerCase[rand(0,strlen($lowerCase)-1)].$upperCase[rand(0,strlen($upperCase)-1)].$numbers[rand(0,strlen($numbers)-1)].$specialChars[rand(0,strlen($specialChars)-1)];

    //echo $password."\n";

    for($i=strlen($password); $i<$length; $i++){
        $password .= $allChars[rand(0, strlen($allChars)-1)];
    }

    return $password;
}

$password = generatePassword(12);
echo $password."\n";
//echo strlen($password);