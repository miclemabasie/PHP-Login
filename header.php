<?php
session_start()
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Login Page</title>
    <link rel="stylesheet" href="css/styles.css" />
    <style>
        .error {
            color: red;
        }

        .success {
            color: green;
        }
    </style>
</head>

<body>
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