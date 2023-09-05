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

    <!-- Readable portion -->
    <div class="chapters" id="chapters">
        <div class="chapters__wrapper">
            <?php
                require_once 'includes/shrtstrydbh.inc.php';
                $qry = mysqli_query($conn, "SELECT * FROM shortstory");
                $str = $_GET["title"];
                $cnt;
                $auth;
                while($rslt = mysqli_fetch_array($qry)){
                    if($str === $rslt['shortStoryTitle']){
                        $cnt = $rslt['shortStoryContent'];
                        $auth = $rslt['shortStoryAuthor'];
                    }
                }
                echo "<h1>$str</h1>";
                echo "<h3>By: $auth</h3>";
                echo "<p>$cnt</p>";
            ?>
        </div>
    </div>
</body>