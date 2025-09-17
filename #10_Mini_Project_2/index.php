<?php

//-----------------------------------
// STUDENT RESULT MANAGEMENT SYSTEM
//-----------------------------------

$students = [
    "Steve" => ["85", "78", "94", "67"],
    "Alex" => ["85", "78", "94", "67"],
    "Ram" => ["85", "78", "94", "67"],
    "Hari" => ["85", "78", "94", "67"],
    "Elon" => ["37", "42", "35", "20"],
];

function  average($marks){
    return array_sum($marks) / count($marks);
}

function result($average){
    return $average >=40 ? "Pass" : "Fail";
}

echo "STUDENT RESULTS";
echo "------------------------------------------\n";

foreach($students as $name=>$marks){
    $avg = average($marks);
    $result = result($avg);

    echo "Name :" . $name . "<br>";
    echo "Marks :" .implode(", ", $marks) . "\n";
    echo "Average :" .number_format($avg , decimals: 2) ."\n";
    echo "Result : " . $result ;
    echo "---------------------------------<br>";
}