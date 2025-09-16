<?php

//-----------
// Functions
//-----------


function greeting(){
    echo "Hello";
}

greeting();
greeting();
greeting();


// parameters

function greet($name = "Guest"){
    echo "Hello" . $name . "<br>";
}

greet("Steve");
greet();




function returning($a, $b){
    return $a - $b;
}

$output = returning(2, 5);

echo $output;


function odd_even($number){
    if($number % 2 == 0){
        echo "Even";
    } else {
        echo "Odd";
    }
}


odd_even(9);
odd_even(10);