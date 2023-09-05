<?php

if(isset($_POST["submit"])){
    $chapterTitle = $_POST["chapterTitle"];
    $chapterContent = $_POST["chapterContent"];

    require_once 'dkdbh.inc.php';
    require_once 'functions.inc.php';

    deleteChapter($conn, $chapterTitle, $chapterContent);
}
else {
    header("location: ../currentdpkchap.php?title=$chapterTitle");
    exit();
}