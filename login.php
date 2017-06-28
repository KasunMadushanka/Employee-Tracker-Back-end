<?php
require 'db.php';

$username=$_GET["username"];
$password=$_GET["password"];

$sql="SELECT* FROM user where username=$username and password=$password";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result)>0) {
    echo 1;
}else{
    echo 0;
}

?>
