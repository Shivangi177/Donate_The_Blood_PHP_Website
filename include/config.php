<?php
$serverName="localhost:3307";
$userName="root";
$password="";
$dbconnect="donatetheblood";
$conn=mysqli_connect($serverName,$userName,$password,$dbconnect);
if(!$conn){
    die("Database not connected".mysqli_connect_error());
}
?>