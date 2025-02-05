<?php 

require_once("core.php");

$sessonId = $_SESSION["user_id"] ;

if (isset($_POST))
{
	$FaceBookLinkU = $_POST['FaceBookLink'];
	$TwitterLinkU = $_POST['TwitterLink'];
	$GooglePlusLinkU = $_POST['GooglePlusLink'];
};

$sqldata = "UPDATE tableforcreateaccount SET 
UserFacebook='$FaceBookLinkU',
Usertwitter='$TwitterLinkU',
UserGooglePlus='$GooglePlusLinkU'
WHERE id = '$sessonId'" ;

if ($universityDBconnect -> query($sqldata) === TRUE) {
	header("location:userSocialMediaLink.php");
} else {
	header("location:imageUploadfailmessage.php");
};

?>