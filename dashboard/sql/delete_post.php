<?php
// DB CONN
include "../../library/db_connection.php";


// data
$id=$_REQUEST['id'];

$sql="DELETE FROM product WHERE id='$id';";


// Execution
if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("Successfully Delected!");</script>';
    echo '<script type="text/javascript">window.location.href = "../dashboard.php";</script>';
} else {
    echo '<script type="text/javascript">alert("Error! Try again!");</script>';
    echo '<script type="text/javascript">window.location.href = "../dashboard.php";</script>';
}

$conn->close();
?>