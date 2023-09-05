<?php
    include_once 'header.php';
?>
    <!-- Hero Section -->
    <div class="hero" id="home">
        <div class="hero__container">
            <h1 class="hero__heading">Ike's place for his <span>stories</span></h1>
            <p class="hero__description">Scroll Down to Find</p>
            <button class="main__btn"><a href="#">Out More</a></button>
        </div>
    </div>

    <!-- About Section -->
    <div class="main" id="about">
        <div class="main__container">
            <div class="main__img--container">
                <div class="main__img--card"><i class="fas fa-layer-group"></i></div>
            </div>
            <div class="main__content">
                <h1>Mainly write Fantasy/Sci-fi</h1>
                <p>Can post discussions/fanart about various stories and characters</p>
                <button class="main__btn"><a href="#posts">Posts Here</a></button>
            </div>
        </div>
    </div>

    <!-- Books Section -->
    <div class="services" id="services">
        <h1>My Books</h1>
        <div class="services__wrapper">
            <div class="services__card">
                <h2>The Depra King</h2>
                <p>Completed</p>
                <div class="services__btn">
                    <button><a href="readdpk.php">Read Here</a></button>
                </div>
            </div>
            <div class="services__card">
                <h2>Time Traveling Hero</h2>
                <p>Ongoing</p>
                <div class="services__btn">
                    <button><a href="readtth.php">Read Here</a></button>
                </div>
            </div>
            <div class="services__card">
                <h2>And More</h2>
                <div class="services__btn"><button>Find Rest</button></div>
            </div>
        </div>
    </div>

    <!-- Posts Section -->
    <div class="posts" id="posts">
        <h1>Fanart and Discussions</h1>
        <div class="posts__wrapper">
            <div class="posts__card">
                <h2>Fanart</h2>
                <div class=posts__btn>
                    <?php
                        if(!empty($_SESSION)){
                            echo "<button><a href='fanartpage.php'>Post your Work Here</a></button>";
                        }
                        else{
                            echo "<button><a href='index.php#sign-up'>Post your Work Here</a></button>";
                        }
                    ?>
                </div>
            </div>
            <div class="posts__card">
                <h2>Discussions</h2>
                <div class="posts__btn">
                    <?php
                        if(!empty($_SESSION)){
                            echo "<button><a href='discussionpage.php'>Join the Discussion Here</a></button>";
                        }
                        else{
                            echo "<button><a href='index.php#sign-up'>Join the Discussion Here</a></button>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Section -->
    <div class="main" id="sign-up">
        <div class="main__container">
            <div class="main__content">
                <h1>Sign up to comment/post various things</h1>
                <h2>Sign Up Today</h2>
                <button class="main__btn"><a href="signup.php">Sign up</a></button>
            </div>
            <div class="main__img--container">
                <div class="main__img--card" id="card-2"><i class="fas fa-users"></i></div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="footer__container">
        <div class="footer__links">
            <div class="footer__link--wrapper">
                <div class="footer__link--items">
                    <h2>Posts</h2>
                    <a href="/">Submit Fanart</a> 
                    <a href="/">Discussion Posts</a>
                    <a href="/">Support</a>
                    <a href="/">Contact Us</a>
                  </div>
            </div>
            <div class="footer__link--wrapper">
                <div class="footer__link--items">
                  <h2>Social Media</h2>
                  <a href="/">Instagram</a> 
                  <a href="/">Facebook</a>
                  <a href="/">Youtube</a> 
                  <a href="/">Twitter</a>
                </div>
            </div>
        </div>
        <section class="social__media">
            <div class="social__media--wrap">
                <div class="footer__logo">
                    <a href="/" id="footer__logo">Ike's Books</a>
                </div>
                <p class="website__rights">© Ike's Books 2022. All Rights Reserved</p>
                <div class="social__icons">
                    <a href="/" class="social__icon--link" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="/" class="social__icon--link" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="/" class="social__icon--link" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="/" class="social__icon--link" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="/" class="social__icon--link" target="_blank"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </section>

<?php
    include_once 'footer.php';
?>    