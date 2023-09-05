<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Current Depra King Chapter</title>
    <link rel="stylesheet" type="text/css" href="CSS/styleschapter.css?v<?php echo time(); ?>">
</head>
<body>
    <div class="box">
        <div class="page">
            <div id="errorMsg"></div>
            <div class="content">
                <?php
                    require_once 'includes/dkdbh.inc.php';
                    $qry = mysqli_query($conn, "SELECT * FROM dkchapters");
                    $str = $_GET["title"];
                    $cnt;
                    while($rslt = mysqli_fetch_array($qry)){
                        if($str === $rslt['chapterTitle']){
                            $cnt = $rslt['chapterContent'];
                        }
                    }
                    echo "  <form class='chapter' name='newChapter' method='post' action='includes/deprakingcurrent.inc.php' id='chapter'>
                                <input type='text' name='chapterTitle' id='chapTitle' value='$str'>
                                <textarea rows='45' cols='50' name='chapterContent' form='chapter'>$cnt</textarea>
                                <br>
                                <input type='submit' name='submit' value='Save'><br>
                                <input type='submit' name='submit' value='Delete'>
                            </form>";
                ?>
            </div>
        </div>
        <?php
    if (isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p style='color:red;text-align:center;'>Fill in all Fields!</p>";
        }
        else if ($_GET["error"] == "stmtfailed"){
            echo "<p style='color:red;text-align:center;'>Something went wrong</p>";
        }
        else if ($_GET["error"] == "none"){
            echo "<p style='color:#04db45;text-align:center;'>You have updated your chapter!</p>";
        }
    }

    ?>
    </div>
</body>