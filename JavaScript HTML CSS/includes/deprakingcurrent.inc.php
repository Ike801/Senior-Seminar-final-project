<?php

if(isset($_POST["submit"])){
    $chapterTitle = $_POST["chapterTitle"];
    $chapterContent = $_POST["chapterContent"];

    require_once 'dkdbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputChapter($chapterTitle, $chapterContent) !== false){
        header("location: ../newdpkchap.php?error=emptyinput");
        exit();
    }
    
    if($_POST['submit'] == 'Save'){
        updateChapter($conn, $chapterTitle, $chapterContent);
    }
    else if ($_POST['submit'] == 'Delete'){
        deleteChapter($conn, $chapterTitle, $chapterContent);
    }
    
}
else {
    header("location: ../currentdpkchap.php?title=$chapterTitle");
    exit();
}