<?php

$host="localhost";
$username="root";
$password="";
$dbName="student_registration";

$connection=mysqli_connect($host,$username,$password,$dbName);

if(!$connection){
    die("connection failed: ".mysqli_connect_error());
}

?>

