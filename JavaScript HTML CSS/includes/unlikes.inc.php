<?php

include_once '../header.php';

if(isset($_POST["unliked"])){
    $postId = $_POST["postid"];
    $userName = $_SESSION["username"];

    require_once 'lksdbh.inc.php';
    require_once 'functions.inc.php';

    deleteLikes($conn2, $postId, $userName);
}
else {
    header("location: ../shortstorypage.php");
    exit();
}