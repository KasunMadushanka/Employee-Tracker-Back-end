<?php
require 'db1.php';

//$username=urldecode($_POST['username']);
//$username=urldecode($_POST['password']);

$sql="INSERT INTO user (firstName, lastName, username,password,token) VALUES ('E', 'admin','4g','4g','ss')";
   if (mysqli_query($con,$sql)) {
      echo "Values have been inserted successfully";
   }

?>
