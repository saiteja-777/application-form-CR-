<?php
$server="localhost";
$username="root";
$pass="";
$db="data";

$conn=new mysqli($server,$username,$pass,$db);

if($conn->connect_error){
    die("End connection");
}
?>