<?php
require_once("core.php");

if (isset($_POST))
{
	$SiteTitle = $_POST['updatesitetitle'];
};

$sql = "INSERT INTO 
updatesitetitle
(
	SiteTitle
)
VALUES
(
	'$SiteTitle'
)";

if (mysqli_query($universityDBconnect, $sql)) {
	header("location:updatesitename.php");
} else {
	header("location:updatesitename.php");
};

?>