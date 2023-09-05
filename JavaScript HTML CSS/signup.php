<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LogIn and SignUp Page</title>
    <link rel="stylesheet" type="text/css" href="CSS/stylesloginsignup.css?v<?php echo time(); ?>">
</head>
<body>
    <div class="box">
        <div class="page">
            <div class="header">
                <a id="login" class="active" href="#login">login</a>
                <a id="signup" href="#signup">signup</a>
            </div>
            <div id="errorMsg"></div>
            <div class="content">
                <form class="login" name="loginForm" method="post" action="includes/login.inc.php">
                    <input type="text" name="name" id="logName" placeholder="Username/Email">
                    <input type="password" name="password" id="logPassword" placeholder="Password">
                    <div id="check">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    <br><br>
                    <input type="submit" name="submit" value="Login">
                    <a href="#">Forgot Password?</a>
                </form>
                <form class="signup" name="signupForm" method="post" action="includes/signup.inc.php">
                    <input type="email" name="email" id="signEmail" placeholder="Email">
                    <input type="text" name="name" id="signName" placeholder="Username">
                    <input type="password" name="password" id="signPassword" placeholder="Password">
                    <input type="password" name="passwordRepeat" id="signPassswordRepeat" placeholder="Repeat Password"><br>
                    <input type="submit" name="submit" value="SignUp">
                </form>
            </div>
        </div>
    <?php
    if (isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p style='color:red;text-align:center;'>Fill in all Fields!</p>";
        }
        else if ($_GET["error"] == "invalidusername"){
            echo "<p style='color:red;text-align:center;'>Choose a proper username!</p>";
        }
        else if ($_GET["error"] == "invalidusername"){
            echo "<p style='color:red;text-align:center;'>Choose a proper username!</p>";
        }
        else if ($_GET["error"] == "invalidemail"){
            echo "<p style='color:red;text-align:center;'>Choose a proper email!</p>";
        }
        else if ($_GET["error"] == "passwordsdontmatch"){
            echo "<p style='color:red;text-align:center;'>Passwords doesn't match!</p>";
        }
        else if ($_GET["error"] == "stmtfailed"){
            echo "<p style='color:red;text-align:center;'>Something went wrong, try again!</p>";
        }
        else if ($_GET["error"] == "usernametaken"){
            echo "<p style='color:red;text-align:center;'>Username already taken!</p>";
        }
        else if ($_GET["error"] == "wronglogin"){
            echo "<p style='color:red;text-align:center;'>Incorrect login information!</p>";
        }
        else if ($_GET["error"] == "none"){
            echo "<p style='color:#04db45;text-align:center;'>You have signed up!</p>";
        }
    }

    ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
    </script>
    <script src="JS/loginsignup.js"></script>
</body>