<?php

include_once '../session.php';

if(isset($_POST["submit"])){
    $discussionTitle = $_GET["title"];
    $commentContent = $_POST["comment"];
    $userUid = $_SESSION["username"];

    require_once 'cmmtdbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputComment($commentContent) !== false){
        header("location: ../comment.php?error=emptyinput?title=$discussionTitle");
        exit();
    }

    saveComment($conn, $discussionTitle, $commentContent, $userUid);
}
else {
    header("location: ../comment.php?title=$discussionTitle");
    exit();
}