<?php

include_once '../header.php';

if(isset($_POST["liked"])){
    $postId = $_POST["postid"];
    $userName = $_SESSION["username"];

    require_once 'lksdbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputFavorite($postId, $userName)){
        header("location: ../shortstorypage.php?error=emptyinput");
        exit();
    }

    updateLikes($conn2, $postId, $userName);
}
else {
    header("location: ../shortstorypage.php?error=nothing");
    exit();
}