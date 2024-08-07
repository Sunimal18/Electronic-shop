<?php
include "../../library/db_connection.php";
    
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$check=0;
      
$sql = "SELECT * FROM admin WHERE user_name='$username' AND password= '$password'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    $check=1;
    $id=$row["id"];
    $user_name=$row["user_name"];
}
if($check==1){
    session_start();
    $_SESSION["id"]=$id;
    $_SESSION['user_name']=$user_name;
    header("location: ../dashboard.php");
}
else{
    echo '<script type="text/javascript">alert("Invalid login! try again!");</script>';
    echo '<script type="text/javascript">window.location.href = "../index.php";</script>';
}
?>