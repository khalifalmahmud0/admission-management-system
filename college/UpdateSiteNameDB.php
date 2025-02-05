	<?php

	require_once("core.php");

	if (isset($_POST))
	{
		$updatesitename = $_POST['sitename'];
	};

	$sql = "INSERT INTO 
	updatesitename
	(
	SiteNameUpdate
	)
	VALUES
	(
	'$updatesitename'
)";

if (mysqli_query($universityDBconnect, $sql)) {
	header("location:updatesitename.php");
} else {
	header("location:updatesitename.php");
};
?>