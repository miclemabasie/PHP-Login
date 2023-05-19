<?php 
    include_once "header.php"
?>
    <div class="login-container">
        <!-- HTML code for the navigation bar -->
        <form action="login.inc.php" method="post">
            <h2>Login</h2>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username/Email" required />
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required />
            <button type="submit">Login</button>
        </form>
    </div>

<?php 

include_once "footer.php"

?>