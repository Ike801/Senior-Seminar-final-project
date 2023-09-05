<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Depra King Chapter</title>
    <link rel="stylesheet" type="text/css" href="CSS/styleschapter.css?v<?php echo time(); ?>">
</head>
<body>
    <div class="box">
        <div class="page">
            <div id="errorMsg"></div>
            <div class="content">
                <form class="chapter" name="newChapter" method="post" action="includes/depraking.inc.php" id="chapter">
                    <input type="text" name="chapterTitle" id="chapTitle" placeholder="Insert Title Here">
                    <textarea rows="45" cols="50" name="chapterContent" form="chapter" placeholder="Insert Text Here"></textarea>
                    <h4>date and time optional for upload</h4>
                    <input type="datetime-local" name="dateTime" id="dateTime">
                    <br>
                    <input type="submit" name="submit" value="Upload">
                </form>
            </div>
        </div>
        <?php
    if (isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p style='color:red;text-align:center;'>Fill in all Fields!</p>";
        }
        else if ($_GET["error"] == "stmtfailed"){
            echo "<p style='color:red;text-align:center;'>Choose a proper username!</p>";
        }
        else if ($_GET["error"] == "none"){
            echo "<p style='color:#04db45;text-align:center;'>You have created a chapter!</p>";
        }
    }

    ?>
    </div>
</body>