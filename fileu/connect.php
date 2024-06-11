<?php

$hostname="localhost";
$username="root";
$password="";
$db_name="mkwu";

$conn=mysqli_connect($hostname,$username,$password,$db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>
