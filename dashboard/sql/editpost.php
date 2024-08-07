<?php
// database connection 
include "../../library/db_connection.php";

// data 
$id=$_REQUEST['id'];
$product_name = mysqli_real_escape_string($conn, $_REQUEST['Product_name']);
$details = mysqli_real_escape_string($conn, $_REQUEST['details']);
$price = $_REQUEST['Price'];
$cat = $_REQUEST['category'];

// image
$temp = $_FILES["img"]["tmp_name"];
$img_x = $_FILES["img"]["name"];
$img_name = rand(10,99999).'.jpg'; // Save the image with .jpg extension

// Destination
$destination = "../../images/" . $img_name;

// Move the file
move_uploaded_file($temp, $destination);

// i+update to DB
$sql="UPDATE product SET name='$product_name',price='$price',category='$cat',details='$details',image='$img_name' WHERE id=$id ";


// Execution
if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("Successfully Edited!");</script>';
    echo '<script type="text/javascript">window.location.href = "../dashboard.php";</script>';
} else {
    echo '<script type="text/javascript">alert("Error! Try again!");</script>';
    echo '<script type="text/javascript">window.location.href = "../dashboard.php";</script>';
}

$conn->close();
?>
