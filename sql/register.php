<?php
// database connection 
include "../library/db_connection.php";

// data 
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$user_name = mysqli_real_escape_string($conn, $_REQUEST['user_name']);
$tel = mysqli_real_escape_string($conn, $_REQUEST['tel']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);

// insert to DB
$sql = "INSERT INTO customer (name, user_name, phone, email, password) VALUES ('$name', '$user_name', '$tel','$email', '$password')";

// Execution
if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("Registration Successfully!");</script>';
    echo '<script type="text/javascript">window.location.href = "../index.php";</script>';
} else {
    echo '<script type="text/javascript">alert("Error! Try again!");</script>';
    echo '<script type="text/javascript">window.location.href = "../register.html";</script>';
}

$conn->close();
?>
