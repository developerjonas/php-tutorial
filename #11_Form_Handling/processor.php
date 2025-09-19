<?php

if($_SERVER['REQUEST_METHOD'] =='POST'){
    if((isset($_POST['username']) && isset($_POST['password'])) && !empty($_POST['username']) && empty($_POST['password']) ){
        $username  = $_POST['username'];
        $password  = $_POST['password'];

        echo "Your username is :: " . $username;
        echo "Your password is ::  ". $password;
    } else {
        if(empty($_POST['username'])){
            echo "no unsername u entered";
        } else if (empty($_POST['password'])){
            echo "nop password entered";
        } else {
            echo "both are missing";
        }
    } 
} else {
    echo "Please submit the form ";
}