<?php
    include_once 'header.php';
?>

    <div class="services" id="services">
        <h1>Fanart</h1>
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
                    <button><a href='newfanart.php'>Create New Post Here</a></button></div>
                    </div>";

                require_once 'includes/fnadbh.inc.php';
                $qry = mysqli_query($conn, "SELECT * FROM fanarts");
                while($rslt = mysqli_fetch_array($qry)){
                    $str = $rslt['imageText'];
                    $cnt = $rslt['imageId'];
                    echo "<div class='services__card'>
                        <div class='services__button'>
                        <h2>$str</h2>
                        <img src='getimage.php?id=$cnt' width='175' height='200'/>
                        </div>";
                }
                mysqli_close($conn);
            ?>
            <!-- <div class="services__card">
	            <h2><strong><echo $str; ?></strong></h2>
                <img src="<echo $cnt; ?>" alt="" title="<echo $cnt; ?>" class="img-responsive" />
            </div> -->
        </div>
    </div>
</body>