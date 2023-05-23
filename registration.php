<?php
include_once "header.php"
  ?>

<div class="register-container">
  <form action="includes/signup.inc.php" method="post">
    <h2>Register</h2>
    <?php
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p class='error'>Fill in all fields!</p>";
      } else if ($_GET["error"] == "invaliduid") {
        echo "<p class='error'>Choose a proper username</p>";
      } else if ($_GET["error"] == "invalidemail") {
        echo "<p class='error'>Choose a proper email</p>";
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
    <label for="name">Full Name:</label>
    <input type="text" id="fullname" name="name" required />
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required />
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required />
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required />
    <label for="password2">Repeat Password:</label>
    <input type="password" id="password2" name="password2" required />
    <button type="submit">Register</button>
  </form>
</div>



<?php
include_once "footer.php"
  ?>