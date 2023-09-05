<!DOCTYPE html>
<html lang="en">
<head>
    <?php $userName = $_SESSION["username"];?>
    <meta charset="UTF-8">
    <title>New Discussion Post</title>
    <link rel="stylesheet" type="text/css" href="CSS/styleschapter.css?v<?php echo time(); ?>">
</head>
<body>
    <div class="box">
        <div class="page">
            <div id="errorMsg"></div>
            <div class="content">
                <form class="shortstory" name="newShortStory" method="post" action="includes/newshortstory.inc.php" id="newShortStory">
                    <input type="text" name="shortStoryTitle" id="shstTitle" placeholder="Insert Title Here">
                    <input type="text" name="shortStoryAuthor" id="shstAuthor" placeholder="Insert Author name here">
                    <textarea rows="45" cols="50" name="shortStoryContent" form="newShortStory" placeholder="Insert Text Here"></textarea>
                    <br>
                    <input type="submit" name="submit" value="Save">
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
            echo "<p style='color:#04db45;text-align:center;'>You have created a short story!</p>";
        }
    }

    ?>
    </div>
</body>