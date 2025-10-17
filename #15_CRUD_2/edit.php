<?php

include 'db.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $sql = "UPDATE table1 SET name='$username', email='$email' WHERE id=$id";

    if (mysqli_query($connection, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record";
    }

    mysqli_close($connection);
    exit;
}

$id = $_GET['id'];
$sql = "SELECT * FROM table1 WHERE id=$id";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Record</title>
</head>
<body>

<h2>Edit Record</h2>

<form method="post" action="edit.php">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label>Name:</label>
    <input type="text" name="username" value="<?php echo $row['name']; ?>"><br><br>

    <label>Email:</label>
    <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>

    <input type="submit" name="update" value="Update">
</form>

</body>
</html>
