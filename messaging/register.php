<?php
require '../db1.php';

$firstName='kasun';
$lastName='madushanka';//$_POST['lastName'];
$username='kasun7';//$_POST["username"];
$password='g';//$_GET["password"];
$token=$_POST['token'];

$sql="INSERT INTO user (firstName, lastName, username,password,token) VALUES ('$firstName','$lastName','$username','$password','$token')";
if (mysqli_query($con,$sql)) {
    echo "Values have been inserted successfully";
}

?>
