<?php

$host = 'localhost';
$dbname = 'employee-tracker';
$username = 'root';
$password = '1234';

$con = mysqli_connect($host, $username, $password,$dbname);

if (!$con) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>
