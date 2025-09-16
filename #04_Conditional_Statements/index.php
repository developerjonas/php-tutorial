<!-- CONDITIONAL STATEMENTS IN PHP -->

<?php

echo "Hello World"."<br>";

$age = 20;

if($age == 18){
    echo" YES YOU CAN DRIVE ";
} elseif ($age > 18){
    echo" YES YOU CAN DRIVE  ";
} else {
    echo " SORRY U CANNOT ";
}

echo "<br>";
echo "<br>";
echo "<br>";

if($age == 17){
    echo "The condition was satisfied"."<br>";
} else {
    echo "Hello  Friends";
}

echo "Hello";





echo "This alwasy prints";





$day = "Monday";

if ($day == "Sunday"){
    echo "1st Day";
} else if ($day == "Monday"){
    echo "2nd Day";
} else if ($day == "Tuesday"){
    echo "3rd Day";
} else if ($day == "Wednesday"){
    echo "4th Day";
}


echo "<br>";
echo "<br>";
echo "<br>";

// CASE SWITCH STATEMENTS


$day = "njaklsdsa";

switch($day){
    case "Monday":
        echo "2nd day" ;
        break;
    case "Tuesday":
        echo "3rd Day";
        break;
    case "Wednesday":
        echo "4th Day";
        break;
    case "Thursday":
        echo"5th Day";
        break;
    case "Friday":
        echo "6th Day";
        break;
    default:
        echo"Its must be sunday";
}


$age = 17;
$hasID = false;

if($age >=18){
    if($hasID){
        echo"We can enter the club";
    } else {
        echo "U need to make your ID U are old enough";
    }
} else {
    echo "You are not old enough";
}

//