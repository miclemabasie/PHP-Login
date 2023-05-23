<?php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "12electron@3#";
$dBName = "phpproject01";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    // Kill whatever is running
    die("Connection failed: " . mysqli_connect_error());

}