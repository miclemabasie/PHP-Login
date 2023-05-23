<?php
error_reporting(E_ALL);

function emptyInputSignup($name, $email, $username, $password, $password2)
{
    if (empty($name) || empty($email) || empty($username) || empty($password) || empty($password2)) {
        $result = 1;
    } else {
        $result = 'false';
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

function usernameExists($conn, $username, $email)
{
    $sql = "SELECT * FROM users WHERE usersUid = ? OR UserEmail = ?;";
    // create a prepared statement
    $stmt = mysqli_stmt_init($conn);
    if (!$stmt) {
    }

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registration.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}


function createUser($conn, $fullName, $email, $username, $password)
{
    $sql = "INSERT INTO users (userName, UserEmail, usersUid, userPwd) VALUES (?, ?, ?, ?);";
    // create a prepared statement
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registration.php?error=stmtfailed");
        exit();
    }
    // hashing password
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../registration.php?error=none");
    exit();
}

function emptyInputLogin($name, $password)
{
    if (empty($name) || empty($password)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $password)
{
    $uidExists = usernameExists($conn, $username, $username);
    if ($uidExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    // Check the equivelence of the hashed password
    $passwordHashed = $uidExists["userPwd"];
    $checkPwd = password_verify($password, $passwordHashed);
    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
    } else if ($checkPwd === true) {
        // sessions
        session_start();
        $_SESSION['userid'] = $uidExists['userID'];
        $_SESSION['useruid'] = $uidExists['usersUid'];
        header("location: ../index.php");
    }

}