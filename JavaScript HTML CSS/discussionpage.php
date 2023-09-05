<?php
    include_once 'header.php';
?>

    <div class="services" id="services">
        <h1>Discussions</h1>
        <div class="services__wrapper">
            <?php
                // require_once 'includes/dbh.inc.php';
                // $qry = mysqli_query($conn, "SELECT * FROM users");
                // while($rslt = mysqli_fetch_array($qry)){
                //     if($rslt['username'] !== $_SESSION['username']){
                //         ;
                //     }
                //     else{
                //         $str = $rslt['username'];
                //         echo "<h2>$str</h2>";
                //     }
                //     echo "<div class='services__btn'>
                //     <button><a href='discussions.php?title=$str'>$str</a></button></div>";
                // }
                // mysqli_close($conn);

                echo "<div class='services__card'>
                    <div class='services__button'>
                    <button><a href='newdiscussion.php'>Create New discussion Here</a></button></div>
                    </div>";

                require_once 'includes/dscdbh.inc.php';
                $qry = mysqli_query($conn, "SELECT * FROM discussions");
                while($rslt = mysqli_fetch_array($qry)){
                    $str = $rslt['discussionTitle'];
                    $usr = $rslt['userName'];
                    echo "<div class='services__card'>
                        <div class='services__button'>
                        <h4>$usr</h4>
                        <button><a href='discussions.php?title=$str'>$str</a></button></div>
                        </div>";
                }
                mysqli_close($conn);
            ?>
        </div>
    </div>
</body>