<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the name and password from the user
    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";
    if (emptyInputLogin($name, $password) === 0) {
        // // if the function return true
        // this means there are empty input fields
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $password);

} else {
    header("location: ../login.php?error=unauthorized");
}