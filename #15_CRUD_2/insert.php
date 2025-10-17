<?php

include 'db.php';


$username = $_POST['username'];
$email = $_POST['email'];

$sql = "INSERT INTO table1 (name, email) VALUES ('$username','$email')";

if(mysqli_query( $connection, $sql)){
    echo "New record added";
} else {
    echo "Error";
}

mysqli_close($connection);

