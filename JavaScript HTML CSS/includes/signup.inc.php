<?php

if (isset($_POST["submit"])){

    $email = $_POST["email"];
    $name = $_POST["name"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["passwordRepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $password, $passwordRepeat) !== false){
        header("location: ../signup.php?error=emptyinput#signup");
        exit();
    }

    if (invalidUsername($name) !== false){
        header("location: ../signup.php?error=invalidusername#signup");
        exit();
    }

    if (invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidemail#signup");
        exit();
    }

    if (passwordMatch($password, $passwordRepeat) !== false){
        header("location: ../signup.php?error=passwordsdontmatch#signup");
        exit();
    }

    if (usernameExists($conn, $name, $email) !== false){
        header("location: ../signup.php?error=usernametaken#signup");
        exit();
    }

    createUser($conn, $name, $email, $password);

}
else {
    header("location: ../signup.php#signup");
    exit();
}