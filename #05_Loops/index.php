<?php

// -----------------
// LOOPS IN PHP
// -----------------

echo "1";
echo "2";
echo "3";
echo "4";
echo "5";
echo "6";
echo "7";
echo "8";
echo "9";
echo "10";


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


// LOOPS

// 1. For Loop
// 2. While Loop
// 3. do while loop 
// 4. for each loop 

// $number++ => $number = $number + 1

for ( $number = 0 ; $number < 10 ; $number++){
    echo $number . "<br>";
}

$numbering = 1;

while($numbering < 10 ){
    echo $numbering."<br>";
    $numbering++;
}



do {
    echo "Hello<br>";
    $numbering;
} while($numbering < 10 );


$fruits = ["Apple" , "Banana", "Pomegranate"];

foreach ($fruits as $key => $value) {
    echo $key . "=>" . $value;
};

foreach ($fruits as $fruit){
    echo $fruit;
}

