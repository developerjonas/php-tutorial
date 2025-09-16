<?php

function factorial($num)
{
    if ($num == 1 || $num == 0) {
        return 1;
    }
    return $num * factorial($num - 1);
}


$output = factorial(5);

echo $output;



// Static , Local &  Global

echo "<br>";
echo "<br>";
echo "<br>";
$num = 1;

function testGlobal()
{
    global $num;
    echo $num;
}

testGlobal();


echo "<br>";
echo "<br>";
echo "<br>";


function localTest()
{
    $x = 10;
    echo $x;
}

localTest();

// echo $x;

function staticVariable()
{
    static $count = 0;
    $count++;
    echo $count . "<br>";
}

staticVariable();
staticVariable();
staticVariable();