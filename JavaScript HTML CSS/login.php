<?php
    include_once 'header.php'
?>
    <section class="signup-form">
        <h2>Log in</h2>
        <div class="signup-form-form">
            <form action="login.inc.php" method="post">
                <input type="text" name="name" id="signName" placeholder="Username/Email">
                <input type="password" name="password" id="signPassword" placeholder="Password">
                <button type="submit" name="submit">Log in</button>
            </form>
        </div>
    </section>

<?php
    include_once 'footer.php'
?> 