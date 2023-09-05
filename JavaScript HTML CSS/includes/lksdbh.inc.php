<?php

$serverName = "localhost";
$dbuUserName = "root";
$dbPassword = "";
$dbName = "favorites";

$conn2 = mysqli_connect($serverName, $dbuUserName, $dbPassword, $dbName);

if(!$conn2){
    die("Connection failed: " . mysqli_connect_error());
}