<?php 

require_once("dbconnect.php"); 

session_start();

// Check if user logged in or not
if (!isset($_SESSION['user_id'])){
// if not logged in !
	header("location:index.php");
}



?>
