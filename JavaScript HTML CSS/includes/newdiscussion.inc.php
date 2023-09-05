<?php

include_once '../session.php';

if(isset($_POST["submit"])){
    $discussionTitle = $_POST["discussionTitle"];
    $discussionContent = $_POST["discussionContent"];
    $userName = $_SESSION["username"];

    require_once 'dscdbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputDiscussion($discussionTitle, $discussionContent) !== false){
        header("location: ../newdiscussion.php?error=emptyinput");
        exit();
    }

    saveDiscussion($conn, $discussionTitle, $discussionContent, $userName);
}
else {
    header("location: ../newdiscussion.php");
    exit();
}