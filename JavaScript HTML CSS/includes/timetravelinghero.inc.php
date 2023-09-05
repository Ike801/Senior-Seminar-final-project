<?php

if(isset($_POST["submit"])){
    $chapterTitle = $_POST["chapterTitle"];
    $chapterContent = $_POST["chapterContent"];
    $dateTime = $_POST["dateTime"];

    require_once 'tthdbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputChapter($chapterTitle, $chapterContent) !== false){
        header("location: ../newtthchap.php?error=emptyinput");
        exit();
    }

    if(empty($dateTime)){
        saveTthChapter($conn, $chapterTitle, $chapterContent);
    }else{
        saveTthChapterDateTime($conn, $chapterTitle, $chapterContent, $dateTime);
    }
}
else {
    header("location: ../newtthchap.php");
    exit();
}