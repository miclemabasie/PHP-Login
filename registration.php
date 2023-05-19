<?php
include_once "header.php"
  ?>

<div class="register-container">
  <form action="includes/signup.inc.php" method="post">
    <h2>Register</h2>
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