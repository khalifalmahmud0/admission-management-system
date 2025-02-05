<?php

require_once("core.php");

if (isset($_POST))
{
	$updatesiteintroductions = $_POST['UpdateIntro'];
};

$sql = "INSERT INTO 
updatesiteintroduction
(
	SiteIntroductionUPDATE
)
VALUES
(
	'$updatesiteintroductions'
)";


if (mysqli_query($universityDBconnect, $sql)) {
	header("location:uploadSuccessMassage.php");
} else {
	header("location:imageUploadfailmessage.php");
};


?>