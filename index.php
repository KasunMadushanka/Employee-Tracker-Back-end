<?php
require 'db.php';

$username=$_POST["username"];
//$password=$_GET["password"];

//echo $username;

$sql="INSERT INTO user (firstName, lastName, email,password) VALUES ('B', 'admin','4g','4g')";
   if (mysqli_query($con,$sql)) {
      echo "Values have been inserted successfully";
   }

?>
