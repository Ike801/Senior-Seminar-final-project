<?php

$serverName = "localhost";
$dbuUserName = "root";
$dbPassword = "";
$dbName = "shortstory";

$conn = mysqli_connect($serverName, $dbuUserName, $dbPassword, $dbName);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}