<?php

if(isset($_POST["submit"])){
    $shortStoryTitle = $_POST["shortStoryTitle"];
    $shortStoryAuthor = $_POST["shortStoryAuthor"];
    $shortStoryContent = $_POST["shortStoryContent"];

    require_once 'shrtstrydbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputShortStory($shortStoryTitle, $shortStoryAuthor, $shortStoryContent) !== false){
        header("location: ../newshortstory.php?error=emptyinput");
        exit();
    }

    saveShortStory($conn, $shortStoryTitle, $shortStoryAuthor, $shortStoryContent);
}
else {
    header("location: ../newshortstory.php");
    exit();
}