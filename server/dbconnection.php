<?php


$host = "localhost";
$user = "root";
$password = "";
$dbName = "coderSumit";
$connection = mysqli_connect($host,$user,$password,$dbName);
if(!$connection){
    die("Unable to connect " .mysqli_connect_error());
}else{
    echo "connection is successful<br>";
}