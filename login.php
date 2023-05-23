<?php
include_once "header.php"
    ?>
<div class="login-container">
    <!-- HTML code for the navigation bar -->
    <form action="includes/login.inc.php" method="post">
        <h2>Login</h2>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p class='error'>Fill in all fields!</p>";
            } else if ($_GET["error"] == "invaliduid") {
                echo "<p class='error'>Choose a proper username</p>";
            } else if ($_GET["error"] == "unauthorized") {
                echo "<p class='error'>You must fill in the form</p>";
            } else if ($_GET["error"] == "passworddontmatch") {
                echo "<p class='error'>Password must match</p>";
            } else if ($_GET["error"] == "stmtfailed") {
                echo "<p class='error'>Something went wrong!</p>";
            } else if ($_GET["error"] == "usernametaken") {
                echo "<p class='error'>Username already taken</p>";
            } else if ($_GET["error"] == "none") {
                echo "<p class='success'>You have signed up!</p>";
            }
        }
        ?>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required />
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required />
        <button type="submit">Login</button>
    </form>
</div>

<?php

include_once "footer.php"

    ?>