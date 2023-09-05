<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Fanart Post</title>
    <link rel="stylesheet" type="text/css" href="CSS/styleschapter.css?v<?php echo time(); ?>">
</head>
<body>
    <div class="box">
        <div class="page">
            <div id="errorMsg"></div>
            <div class="content">
                <form enctype="multipart/form-data" class="fanart" name="newFanart" method="post" action="includes/newfanart.inc.php" id="newFanart">
                    <input type="text" name="fanartTitle" id="fnaTitle" placeholder="Insert Title Here">
                    <input type="file" name="myFanart" accept="image/png, image/jpeg" required>
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