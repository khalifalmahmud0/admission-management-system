<?php 

$servername = "localhost";
$username = "root";
$password ="";
// after creating database we should add this... not before create database
$dbname = "universityadmissionproject";

// ........................Create connection.............................

$universityDBconnect = mysqli_connect(
	$servername,
	$username,
	$password,
// after creating database we should add this... not before create database
	$dbname
);

// Check connection........................................
// if (!$universityDBconnect) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";


// echo "<hr/>";

// .............................Create database...........................
// Create database
$sqldata = "CREATE DATABASE universityadmissionproject";
// Check connection........................................
// if (mysqli_query($universityDBconnect, $sqldata)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($universityDBconnect);
// }

// echo "<hr/>";

?>
