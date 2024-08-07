<?php
// database connection 
include "../../library/db_connection.php";

// data 
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


// insert to DB
$sql = "INSERT INTO product (name, price, details, image, category) VALUES ('$product_name', '$price', '$details', '$img_name', '$cat')";

// Execution
if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("Successfully Added!");</script>';
    echo '<script type="text/javascript">window.location.href = "../dashboard.php";</script>';
} else {
    echo '<script type="text/javascript">alert("Error! Try again!");</script>';
    echo '<script type="text/javascript">window.location.href = "../dashboard.php";</script>';
}

$conn->close();
?>
