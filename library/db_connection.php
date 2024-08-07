<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$db_name = "aac_electronic"; 


$conn = new mysqli($servername, $username, $password, $db_name);

if(!$conn){
    echo "Connection Failed";
}
?>
