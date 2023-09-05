<?php

function emptyInputSignup($name, $email, $password, $passwordRepeat) {
    $result;
    if(empty($name) || empty($email) || empty($password) || empty($passwordRepeat)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUsername($name) {
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $name)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function passwordMatch($password, $passwordRepeat) {
    $result;
    if($password !== $passwordRepeat){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function usernameExists($conn, $name, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $name, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $password) {
    $sql = "INSERT INTO users (usersEmail, usersUid, usersPwd) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $email, $name, $hashedPassword);
    mysqli_stmt_execute($stmt);
    header("location: ../signup.php?error=none");
    exit();

}

function emptyInputLogin($name, $password) {
    $result;
    if(empty($name) || empty($password)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $password){
    $usernameExists = usernameExists($conn, $username, $username);

    if ($usernameExists === false){
        header("location: ../signup.php#login");
        exit();
    }

    $passwordHashed = $usernameExists["usersPwd"];
    $checkPassword = password_verify($password, $passwordHashed);

    if($checkPassword === false){
        header("location: ../signup.php?error=wronglogin#login");
        exit();
    }
    else if ($checkPassword === true){
        session_start();
        $_SESSION["userid"] = $usernameExists["usersPwd"];
        $_SESSION["username"] = $usernameExists["usersUid"];
        header("location: ../index.php");
        exit();
    }
}

function emptyInputChapter($chapterTitle, $chapterContent) {
    $result;
    if(empty($chapterTitle) || empty($chapterContent)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function saveChapter($conn, $chapterTitle, $chapterContent){
    $sql = "INSERT INTO dkchapters (chapterTitle, chapterContent) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../newdpkchap.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $chapterTitle, $chapterContent);
    mysqli_stmt_execute($stmt);
    header("location: ../depraking.php?error=none");
    exit();

}

function saveChapterDateTime($conn, $chapterTitle, $chapterContent, $dateTime){
    $sql = "INSERT INTO dkchapters (chapterTitle, chapterContent, daTime) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../newdpkchap.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $chapterTitle, $chapterContent, $dateTime);
    mysqli_stmt_execute($stmt);
    header("location: ../depraking.php?error=none");
    exit();

}

function updateChapter($conn, $chapterTitle, $chapterContent){
    $sql = "UPDATE dkchapters SET chapterTitle=?, chapterContent=? WHERE chapterTitle=$chapterTitle";
    $stmt= $conn->prepare($sql);
    $stmt->bind_param("ss", $chapterTitle, $chapterContent);
    $stmt->execute();

    header("location: ../depraking.php?error=none");
    exit();
}

function deleteChapter($conn, $chapterTitle, $chapterContent){
    $sql = "DELETE FROM dkchapters WHERE chapterTitle='$chapterTitle'";
    if(mysqli_query($conn, $sql)){
        header("location: ../depraking.php?error=none");
    } 
    else{
        header("location: ../currentdpkchap.php?title=$chapterTitle?error=stmtfailed");
    }
    exit();
}

function saveTthChapter($conn, $chapterTitle, $chapterContent){
    $sql = "INSERT INTO tthchapters (chapterTitle, chapterContent) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../newtthchap.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $chapterTitle, $chapterContent);
    mysqli_stmt_execute($stmt);
    header("location: ../timetravelinghero.php?error=none");
    exit();

}

function saveTthChapterDateTime($conn, $chapterTitle, $chapterContent, $dateTime){
    $sql = "INSERT INTO tthchapters (chapterTitle, chapterContent, daTime) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../newtthchap.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $chapterTitle, $chapterContent, $dateTime);
    mysqli_stmt_execute($stmt);
    header("location: ../timetravelinghero.php?error=none");
    exit();

}

function updateTthChapter($conn, $chapterTitle, $chapterContent){
    $sql = "UPDATE tthchapters SET chapterTitle=?, chapterContent=? WHERE chapterTitle=$chapterTitle";
    $stmt= $conn->prepare($sql);
    $stmt->bind_param("ss", $chapterTitle, $chapterContent);
    $stmt->execute();

    header("location: ../timetravelinghero.php?error=none");
    exit();
}

function deleteTthChapter($conn, $chapterTitle, $chapterContent){
    $sql = "DELETE FROM tthchapters WHERE chapterTitle='$chapterTitle'";
    if(mysqli_query($conn, $sql)){
        header("location: ../timetravelinghero.php?error=none");
    } 
    else{
        header("location: ../currenttthchap.php?title=$chapterTitle?error=stmtfailed");
    }
    exit();
}

function emptyInputDiscussion($discussionTitle, $discussionContent) {
    $result;
    if(empty($discussionTitle) || empty($discussionContent)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function saveDiscussion($conn, $discussionTitle, $discussionContent, $userName){
    $sql = "INSERT INTO discussions (discussionTitle, discussionContent, userName) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../newdiscussion.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $discussionTitle, $discussionContent, $userName);
    mysqli_stmt_execute($stmt);
    header("location: ../discussionpage.php?error=none");
    exit();

}

function emptyInputComment($commentContent) {
    $result;
    if(empty($commentContent)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function saveComment($conn, $discussionTitle, $commentContent, $userUid){
    $sql = "INSERT INTO comments (discussionTitle, commentContent, userUid) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../comment.php?error=stmtfailed?title=$discussionTitle");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $discussionTitle, $commentContent, $userUid);
    mysqli_stmt_execute($stmt);
    header("location: ../discussions.php?title=$discussionTitle");
    exit();

}

function emptyInputFanart($fanartTitle, $myFanart) {
    $result;
    if(empty($fanartTitle) || empty($myFanart)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function saveFanart($conn, $fanartTitle, $myFanart){
    $sql = "INSERT INTO fanarts (imageText, imageContent) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../newfanart.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $fanartTitle, $myFanart);
    mysqli_stmt_execute($stmt);
    header("location: ../fanartpage.php?error=none");
    exit();

}

function emptyInputShortStory($shortStoryTitle, $shortStoryAuthor, $shortStoryContent) {
    $result;
    if(empty($shortStoryTitle) || empty($shortStoryAuthor) || empty($shortStoryContent)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function saveShortStory($conn, $shortStoryTitle, $shortStoryAuthor, $shortStoryContent){
    $sql = "INSERT INTO shortstory (shortStoryTitle, shortStoryAuthor, shortStoryContent) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../newshortstory.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $shortStoryTitle, $shortStoryAuthor, $shortStoryContent);
    mysqli_stmt_execute($stmt);
    header("location: ../shortstory.php?error=none#$shortStoryTitle");
    exit();

}

function emptyInputFavorite($postId, $userName) {
    $result;
    if(empty($postId) || empty($userName)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function updateLikes($conn2, $postId, $userName){
    $sql = "INSERT INTO favorites (postId, userName) VALUES (?, ?)";
    $stmt = mysqli_stmt_init($conn2);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../shortstorypage.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "is", $postId, $userName);
    mysqli_stmt_execute($stmt);
    header("location: ../shortstorypage.php?error=none");
    exit();
}

function deleteLikes($conn2, $postId, $userName){
    $sql = "DELETE FROM favorites WHERE postId=? AND userName=?";
    $stmt = mysqli_stmt_init($conn2);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../shortstorypage.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, 'is', $postId, $userName);
    mysqli_stmt_execute($stmt);
    
    // mysqli_query($conn2, "DELETE FROM favorites WHERE userName='Test123'");

    header("location: ../shortstorypage.php?error=none");
    exit();
}