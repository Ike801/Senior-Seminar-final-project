<?php
    include_once 'header.php';
?>

    <div class="services" id="services">
        <h1>Favorites</h1>
        <div class="services__wrapper">
            <?php
                require_once 'includes/shrtstrydbh.inc.php';
                require_once 'includes/lksdbh.inc.php';
                $qry = mysqli_query($conn, "SELECT * FROM shortstory");
                $qry2 = mysqli_query($conn2, "SELECT * FROM favorites");
                $rslt2 = mysqli_fetch_all($qry2, MYSQLI_ASSOC);
                while($rslt = mysqli_fetch_assoc($qry)){
                    $str = $rslt['shortStoryTitle'];
                    $auth = $rslt['shortStoryAuthor'];
                    $id = $rslt['shortStoryId'];
                    if(empty($rslt2)){
                        echo "<h3>Your favorites will be below whenever you Heart a short story<h3>";
                    }else{
                        for($row=0; $row < count($rslt2); $row++){
                            if(in_array($id, $rslt2[$row]) && in_array($_SESSION['username'], $rslt2[$row])){
                                echo "<div class='services__card'>";
                                echo "<div class='services__button'>";
                                echo "<button><a href='shortstory.php?title=$str'>$str</a></button></div>";
                                echo "<p>By $auth<p>";
                                echo "<div class='heart-like-button liked' id=$id></div>";
                                echo "</div>";
                                break;
                            }
                        }
                    }
                }
                mysqli_close($conn);
                mysqli_close($conn2);
            ?>
        </div>
    </div>
    <script src="JS/likebutton.js"></script>
</body>