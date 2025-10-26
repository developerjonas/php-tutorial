<?php

$servername = "localhost";
$username = "root";
$password = "root";
$db = "seller";

$connection = mysqli_connect($servername, $username, $password, $db);

if(!$connection){
    die("Connection failed :: " . mysqli_connect_error());
}

echo "Successful connect";