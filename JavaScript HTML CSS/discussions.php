<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussion page</title>
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
                require_once 'includes/dscdbh.inc.php';
                $qry = mysqli_query($conn, "SELECT * FROM discussions");
                $str = $_GET["title"];
                $cnt;
                while($rslt = mysqli_fetch_array($qry)){
                    if($str === $rslt['discussionTitle']){
                        $cnt = $rslt['discussionContent'];
                        $usr = $rslt['userName'];
                    }
                }
                echo "<h4>$usr</h4>";
                echo "<h1>$str</h1>";
                echo "<p>$cnt</p>";
                mysqli_close($conn);

                echo "<br><br><br>
                <form class='comment' name='commentForm' method='post' action='comment.php?title=$str'>
                <input type='submit' name='submit' value='Comment' action='comment.php?title=$str'>
                </form>";

                include_once 'includes/cmmtdbh.inc.php';
                $qry = mysqli_query($conn, "SELECT * FROM comments");
                while($rslt = mysqli_fetch_array($qry)){
                    if($str === $rslt['discussionTitle']){
                        $cnt = $rslt['commentContent'];
                        $user = $rslt['userUid'];
                        echo "<br><br>";
                        echo "<div class='services__card'>
                                <h3>$user</h3>
                                <p>$cnt</p>
                            </div>";
                    }
                }
                mysqli_close($conn);

            ?>
        </div>
    </div>
</body>