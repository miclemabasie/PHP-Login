<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["fullname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    if (emptyInputSignup($fullName, $email, $username, $password, $password2) !== false) {
        // if the function return true
        // this means there are empty input fields
        header("location: ../registration.php?error=emptyinput");
        exit();
    }

    if (invalidUID($username) !== false) {
        // if the function return true
        // this means there are empty input fields
        header("location: ../registration.php?error=invalidUid");
        exit();
    }

    if (invalidEmail($email) !== false) {
        // if the function return true
        // this means there are empty input fields
        header("location: ../registration.php?error=invalidemail");
        exit();
    }

    if (passwordMatch($password, $password2) !== false) {
        // if the function return true
        // this means there are empty input fields
        header("location: ../registration.php?error=passworddontmatch");
        exit();
    }

    if (usernameExists($conn, $username, $email) !== false) {
        // if the function return true
        // this means there are empty input fields
        header("location: ../registration.php?error=usernametaken");
        exit();
    }

    createUser($conn, $fullName, $email, $username, $password);
} else {
    header("location: ../registration.php");
    exit();
}