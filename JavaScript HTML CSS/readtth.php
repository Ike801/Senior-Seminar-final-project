<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Time Traveling Hero Chapters</title>
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
    <div class="chapters" id="chapters">
        <h1>Current Chapters</h1>
        <div class="chapters__wrapper">
            <?php
                date_default_timezone_set("America/Chicago");
                require_once 'includes/tthdbh.inc.php';
                $qry = mysqli_query($conn, "SELECT * FROM tthchapters WHERE CAST(daTime AS DATETIME) <= CAST(CURRENT_TIMESTAMP() AS DATETIME)");
                while($rslt = mysqli_fetch_array($qry)){
                    $str = $rslt['chapterTitle'];
                    echo "<div class='currentchapters'>
                        <button><a href='readtthchap.php?title=$str'>$str</a></button></div>";
                    // if(!empty($rslt['dateTime']) && !empty($rslt['hourTime'])){
                    //     if($rslt['daTime'] >= date("Y-m-d") && $rslt['hourTime'] >= date("H:i")){
                    //         echo "<div class='currentchapters'>
                    //             <button><a href='readtthchap.php?title=$str'>$str</a></button></div>";
                    //     }
                    // }else {
                    //     echo "<div class='currentchapters'>
                    //     <button><a href='readdpkchap.php?title=$str'>$str</a></button></div>";
                    // }
                    
                }
                mysqli_close($conn);
            ?>
        </div>
    </div>
</body>