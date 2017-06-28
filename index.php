<?php
require 'db.php';

$username=$_GET["username"];
$password=$_GET["password"];

echo $username;

$sql="INSERT INTO user (firstName, lastName, email,password) VALUES ('admin', 'admin','$username','$password')";
   if (mysqli_query($con,$sql)) {
      echo "Values have been inserted successfully";
   }
?>
