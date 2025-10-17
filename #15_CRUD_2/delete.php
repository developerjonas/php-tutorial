<?php

include 'db.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM table1 where id = $id";

    if(mysqli_query($connection, $sql)){
        echo "Successfully deleted";

    } else {
        echo "Error deleting";
    }

}

mysqli_close($connection);