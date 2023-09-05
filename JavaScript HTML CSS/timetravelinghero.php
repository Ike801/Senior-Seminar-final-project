<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Chapters</title>
    <link rel="stylesheet" href="CSS/stylesdepraking.css?v<?php echo time(); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" 
    integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
    crossorigin="anonymous"
  />
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar__container">
            <a href="#home" id="navbar__logo">Ike's Books</a>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="index.php#home" class="navbar__links" id="home-page">Home</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Chapter Stuff -->
    <div class="chapters" id="chapters">
        <h1>Current Chapters</h1>
        <div class="chapters__wrapper">
            <?php
                require_once 'includes/tthdbh.inc.php';
                $qry = mysqli_query($conn, "SELECT * FROM tthchapters");
                while($rslt = mysqli_fetch_array($qry)){
                    $str = $rslt['chapterTitle'];
                    echo "<div class='currentchapters'>
                    <button><a href='currenttthchap.php?title=$str'>$str</a></button></div>";
                }
                echo "<div class='newchapter'>
                <button><a href='newtthchap.php'>Create New Chapter Here</a></button></div>";
                mysqli_close($conn);
            ?>
        </div>
    </div>

    <!-- <div>
        <label for="freeform">Tell us how you heard about HubSpot:</label><br>
        <textarea id="freeform" name="freeform" rows="42" cols="150"></textarea>
    </div> 
    <button><a href='$rslt['chapterTitle'].php'>$rslt['chapterTitle']</a></button>-->

</body>