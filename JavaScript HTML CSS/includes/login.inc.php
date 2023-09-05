<?php

if(isset($_POST["submit"])){
    $username = $_POST["name"];
    $password = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($username, $password) !== false){
        header("location: ../signup.php?error=emptyinput#login");
        exit();
    }

    loginUser($conn, $username, $password);
}
else {
    header("location: ../signup.php");
    exit();
}