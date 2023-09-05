<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Discussion Post</title>
    <link rel="stylesheet" type="text/css" href="CSS/styleschapter.css?v<?php echo time(); ?>">
</head>
<body>
    <div class="box">
        <div class="page">
            <div id="errorMsg"></div>
            <div class="content">
                <form class="discussion" name="newDiscussion" method="post" action="includes/newdiscussion.inc.php" id="newDiscussion">
                    <input type="text" name="discussionTitle" id="discTitle" placeholder="Insert Title Here">
                    <textarea rows="45" cols="50" name="discussionContent" form="newDiscussion" placeholder="Insert Text Here"></textarea>
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
            echo "<p style='color:#04db45;text-align:center;'>You have created a chapter!</p>";
        }
    }

    ?>
    </div>
</body>