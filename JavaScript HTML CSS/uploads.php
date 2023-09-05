<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Chapters</title>
    <link rel="stylesheet" href="CSS/stylesuploads.css?v<?php echo time(); ?>">
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
                    <a href="index.php" class="navbar__links" id="home-page">Home</a>
                </li>
                <li class="navbar__item">
                    <a href="#services" class="navbar__links" id="services-page">Books</a>
                </li>
                <li class="navbar__item">
                    <a href="#posts" class="navbar__links" id="posts-page">Posts</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="services" id="services">
        <h1>My Books</h1>
        <div class="services__wrapper">
            <div class="services__card">
                <h2>The Depra King</h2>
                <div class="services__btn">
                    <button><a href="depraking.php">Current/New Chapters</a></button>
                </div>
            </div>
            <div class="services__card">
                <h2>Time Traveling Hero</h2>
                <div class="services__btn">
                    <button><a href="timetravelinghero.php">Current/New Chapters</a></button>
                </div>
            </div>
            <div class="services__card">
                <h2>New Series</h2>
                <div class="services__btn">
                    <button><a href="newseries.php">Start New Series</a></button>
                </div>
            </div>
        </div>
    </div>
</body>