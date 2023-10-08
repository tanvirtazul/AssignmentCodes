<?php

//string manipulation

function manipulate(string $text){
    $text = strtolower($text);
    //echo $text."\n";
    
    $search = "brown";
    $needle = "red";
    $text = str_replace($search, $needle, $text);
    echo $text."\n";
}

$text = "The quick brown fox jumps over the lazy dog.";
manipulate($text);