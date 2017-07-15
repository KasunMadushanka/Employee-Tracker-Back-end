<?php
require 'db1.php';

$emp_id=$_POST["emp_id"];

$sql="SELECT * from employee where emp_id='$emp_id'";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result)>0) {
    while($row = mysqli_fetch_assoc($result)) {
        $data=json_encode($row);
        echo $data;
    }

}else{
    echo 0;

}

?>
