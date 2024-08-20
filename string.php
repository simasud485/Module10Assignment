<?php
$strings = ["Hello", "World", "PHP", 
"Programming"];

$vowels = array('a','e','i','o','u','A','E','I','O','U');

foreach($strings as $value){
$count_vowels = 0;
    for($i = 0; $i < strlen($value); $i++) {
        if(in_array($value[$i], $vowels)) {
            $count_vowels++;
        }
    }
    echo "Original String: ". $value . ", ";
    echo "Vowel Count: ". $count_vowels . ", ";
    echo "Reversed String: ". strrev($value). "\n\n";
}

?>