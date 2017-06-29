<?php
require 'db.php';

$username=urldecode($_POST['username']);
$username=urldecode($_POST['password']);

$sql="INSERT INTO user (firstName, lastName, email,password) VALUES ('$username', 'admin','4g','4g')";
   if (mysqli_query($con,$sql)) {
      echo "Values have been inserted successfully";
   }

?>
