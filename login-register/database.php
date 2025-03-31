<?php
$dbhostName="localhost";
$dbUser="root";
$dbPassword="";
$dbName="login_register";
$conn=mysqli_connect($dbhostName,$dbUser,$dbPassword,$dbName);

if (!$conn){
    die("something went wrong");
}

?>