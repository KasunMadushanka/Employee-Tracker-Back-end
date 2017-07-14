<?php
require '../db1.php';

$firstName='ii';//$_POST['firstName'];
$lastName='y'//$_POST['lastName'];
$username=$_POST["username"];
$password='g';//$_GET["password"];

$sql="INSERT INTO user (firstName, lastName, email,password) VALUES ("$firstName","$lastName","$username","$password")";
if (mysqli_query($con,$sql)) {
    echo "Values have been inserted successfully";
}

?>
