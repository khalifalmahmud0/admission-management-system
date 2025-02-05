<?php
require_once("core.php");

if (isset($_POST))
{
	$updatenews = $_POST['newsname'];
};

// ...............................sql to INSERT DATA........................
$sql = "INSERT INTO 
updatelatestnews
(
	news
)
VALUES
(
	'$updatenews'
)";

// Check connection........................................

if (mysqli_query($universityDBconnect, $sql)) {
	header("location:updatelatestnews.php");
} else {
	header("location:imageUploadfailmessage.php");
}




?>