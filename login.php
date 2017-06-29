<?php
require 'db.php';

$username=urldecode($_POST['username']);
$username=urldecode($_POST['password']);

$sql="SELECT* FROM user where username=$username";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result)>0) {
    echo $username."ffff";
}else{
    echo $username." ".$password."kbkjb";

}

?>
