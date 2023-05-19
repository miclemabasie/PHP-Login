<?php

function emptyInputSignup($fullName, $email, $username, $password, $password2)
{
    $result = true;

    if (empty($firstname) || empty($email) || empty($username) || empty($password) || empty($password2)) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function invalidUID($username)
{
    $result = true;
    if (!preg_match("/^[a-zA-Z0-1]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function invalidEmail($email)
{
    $result = true;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function passwordMatch($passowrd, $password2)
{
    $result = true;
    if ($passowrd != $password2) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function usernameExists($conn, $username)
{
    $result = true;
    if ($passowrd != $password2) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}