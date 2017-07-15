<?php
require 'db1.php';

$emp_id=$_POST["emp_id"];
$latitude=$_POST["latitude"];
$longitude=$_POST["longitude"];

$sql="UPDATE employee set latitude='$latitude',longitude='$longitude' where emp_id='$emp_id'";
if(mysqli_query($con,$sql)){
    echo "1";
}else{
    echo "0";
}

?>
