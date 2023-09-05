<?php include_once 'session.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Website</title>
    <link rel="stylesheet" href="CSS/styles.css?v<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="https://demo.plantpot.works/assets/css/normalize.css">
    <link rel="stylesheet" href="https://use.typekit.net/opg3wle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" 
    integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
    crossorigin="anonymous"
  />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
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
                <?php
                    if(isset($_SESSION["username"])){
                        echo "<li class='navbar__item'>
                        <a href='shortstorypage.php' class='navbar__links' id='shortstory-page'>Short Stories</a>
                        </li>";

                        echo "<li class='navbar__item'>
                        <a href='favoritespage.php' class='navbar__links' id='favorites-page'>Favorites</a>
                        </li>";
                    }
                    
                    if($_SESSION["username"] !== "Ike801"){
                        ;
                    }
                    else {
                        echo "<li class='navbar__item'>
                        <a href='uploads.php' class='navbar__links' id='upload-page'>Upload</a>
                        </li>";
                    }
                ?>
                <li class="navbar__item">
                    <a href="index.php#home" class="navbar__links" id="home-page">Home</a>
                </li>
                <li class="navbar__item">
                    <a href="index.php#about" class="navbar__links" id="about-page">About</a>
                </li>
                <li class="navbar__item">
                    <a href="index.php#services" class="navbar__links" id="services-page">Books</a>
                </li>
                <li class="navbar__item">
                    <a href="index.php#posts" class="navbar__links" id="posts-page">Posts</a>
                </li>
                <?php
                    if(isset($_SESSION["username"])){
                        echo "<li class='navbar__btn'>
                        <a href='includes/logout.inc.php' class='button' id='logout'>Log out</a>
                        </li>";
                    }
                    else {
                        echo "<li class='navbar__btn'>
                        <a href='index.php#sign-up' class='button' id='signup'>Sign Up</a>
                        </li>";
                    }
                ?>
                <!-- <li class="navbar__btn">
                    <a href="#signup.php" class="button" id="signup">Sign Up</a>
                </li> -->
            </ul>
        </div>
    </nav>