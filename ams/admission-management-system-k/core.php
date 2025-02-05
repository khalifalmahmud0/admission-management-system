<?php
// Database Connection 
$servername = 'localhost';
$username   = 'root';
$password   = '';
$dbname = 'ams-bist';
$conn = mysqli_connect(
    $servername,
    $username,
    $password,
    $dbname
);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Start Session 
session_start();
