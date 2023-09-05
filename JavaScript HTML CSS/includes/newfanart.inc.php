<?php

if(isset($_POST["submit"])){
    $fanartTitle = $_POST["fanartTitle"];
    $myFanart = $_FILES["myFanart"];

    require_once 'fnadbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputFanart($fanartTitle, $myFanart) !== false){
        header("location: ../newfanart.php?error=emptyinput");
        exit();
    }

    saveFanart($conn, $fanartTitle, $myFanart);
}
else {
    header("location: ../newfanart.php");
    exit();
}