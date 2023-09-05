<?php

if(isset($_POST["submit"])){
    $chapterTitle = $_POST["chapterTitle"];
    $chapterContent = $_POST["chapterContent"];

    require_once 'tthbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputChapter($chapterTitle, $chapterContent) !== false){
        header("location: ../newdpkchap.php?error=emptyinput");
        exit();
    }
    
    if($_POST['submit'] == 'Save'){
        updateTthChapter($conn, $chapterTitle, $chapterContent);
    }
    else if ($_POST['submit'] == 'Delete'){
        deleteTthChapter($conn, $chapterTitle, $chapterContent);
    }
    
}
else {
    header("location: ../currentdpkchap.php?title=$chapterTitle");
    exit();
}