<?php
require 'db.php';

//$username=$_GET["username"];
//$password=$_GET["password"];

$sql="SELECT* FROM user";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result)>0) {
    while($row = mysqli_fetch_assoc($result)) {
       echo "kasun\n";
   }
    //echo 1;
}else{
    //echo 0;
}

?>
