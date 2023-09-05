<?php

if(isset($_POST["submit"])){
    $chapterTitle = $_POST["chapterTitle"];
    $chapterContent = $_POST["chapterContent"];
    $dateTime = $_POST["dateTime"];

    require_once 'dkdbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputChapter($chapterTitle, $chapterContent) !== false){
        header("location: ../newdpkchap.php?error=emptyinput");
        exit();
    }

    if(empty($dateTime)){
        saveChapter($conn, $chapterTitle, $chapterContent);
    }else{
        saveChapterDateTime($conn, $chapterTitle, $chapterContent, $dateTime);
    }
}
else {
    header("location: ../newdpkchap.php");
    exit();
}