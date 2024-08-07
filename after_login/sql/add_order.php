<?php
// database connection 
include "../../library/db_connection.php";

// data 
$id=$_REQUEST['id'];
session_start();
$cus_id=$_SESSION["id"];
$pay_status='Pending';


// insert to DB
$sql = "INSERT INTO order_details (product_id, Customer_id,payment_status) VALUES ('$id', '$cus_id','$pay_status')";

// Execution
if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("Successfully Added Order. Please make the Payment!");</script>';
    echo '<script type="text/javascript">window.location.href = "../payment.php?id=<?php echo $id; ?>";</script>';
} else {
    echo '<script type="text/javascript">alert("Error! Try again!");</script>';
    echo '<script type="text/javascript">window.location.href = "../dashboard.php";</script>';
}

$conn->close();
?>
