<?php

session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Functionality Test Site</title>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #4CAF50;
            margin-top: 50px;
        }

        /* Style for the navigation bar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            color: black;
            padding: 10px 20px;
        }

        /* Style for the logo */
        .logo {
            font-size: 24px;
            font-weight: bold;
            margin-right: auto;
        }

        /* Style for the links */
        .links {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .links a {
            color: black;
            text-decoration: none;
            margin-left: 20px;
            font-size: 18px;
        }


        p {
            color: #fff;
            line-height: 1.5;
            margin-bottom: 20px;
        }
    </style>
</head>
<nav class="navbar">
    <div class="logo">PHPLOGIN</div>
    <div class="links">
        <a href="#">About</a>
        <a href="#">Contact</a>
        <?php
        if (isset($_SESSION["useruid"])) {
            echo "<a href='./accoun.php'>Account</a>";
            echo "<a href='./courses.php'>Courses</a>";
            echo "<a href='./includes/logout.inc.php'>Logout</a>";
        } else {
            echo "<a href='./login.php'>Login</a>";
            echo "<a href='./registration.php'>Sign up</a>";
        }
        ?>


    </div>
</nav>

<body>
    <div class="container">
        <h1>Login Functionality Test Site</h1>
        <p>Welcome to our site that is used to test login functionalities with PHP. This site is designed to help
            developers test their PHP-based login systems in a safe and secure environment.</p>
        <p>Our site provides a range of tools and resources that can be used to simulate different login scenarios,
            including incorrect passwords, expired sessions, brute-force attacks, and more. Developers can use these
            tools to test the security and reliability of their login systems, and make sure they are fully prepared to
            handle any potential threats or vulnerabilities.</p>
        <p>So if you're looking to test your PHP login system, look no further than our Login Functionality Test Site!
        </p>
    </div>
</body>

</html>