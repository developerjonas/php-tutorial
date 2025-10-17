<?php

include 'db.php';

$sql = "SELECT * FROM table1";

$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>";
    echo "ID";
    echo "</th>";
    echo "<th>";
    echo "Name";
    echo "</th>";
    echo "<th>";
    echo "Email";
    echo "</th>";
    echo "<th>";
    echo "Actions";
    echo "</th>";
    echo "</tr>";


    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row['id'] . " </td><td>" . $row['name'] . " </td><td>" . $row['email'] . " </td><td>";
        echo "<td><a href='edit.php?id=" . $row["id"] . "'>Edit</a> | <a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>";

        echo "</tr>";
    }

    echo "</table>";
}