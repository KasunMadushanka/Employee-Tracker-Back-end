<?php
require 'db1.php';

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT* FROM user where username='$username' and password='$password'";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result)>0) {
    echo 1;
}else{
    echo 0;

}

?>
