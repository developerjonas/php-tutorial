<?php


//Indexed array
$fruits = ["Apple", "Mango", "Banana"];

echo $fruits[1];


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


// Associative array
$person = [
    "name"=>"Steve",
    "age"=>22
];

echo $person['age'];

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


// Multidimensional array 


$matrix = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

echo $matrix[2][2];


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


// Methods of earrays



echo count($matrix);


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


array_push($matrix,10);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


echo count($matrix);


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


array_pop($matrix);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


echo count($matrix);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";




function printArray($fruits){
    foreach($fruits as $fruit){
        echo $fruit ."\n";
    }
}

printArray($fruits);


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



function odd($num){
    $odd = [];
    foreach($num as $n){
        if($n % 2 != 0 ){
            $odd[] = $n;
        }
    }
    return $odd;
}


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



$result = odd([1,2,3,4,5,6,7,8,9,0]);
print_r($result);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



$input = [1,2,3,4,5,6,7,8,9];

$squares = array_map(fn($n)=>$n*$n, $input);
print_r($squares);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



$evens = array_filter($input, fn($n)=>$n%2==0);
print_r($evens);