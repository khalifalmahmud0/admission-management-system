<?php 

require_once("core.php");

$sessonId = $_SESSION["user_id"] ;

if (isset($_POST))
{
	$pass = md5($_POST['EnteryourNewPassword']);

};




$sqldata = "UPDATE tableforcreateaccount SET 
CconfirmpasswordA='$pass'
WHERE id = '$sessonId'" ;


if ($universityDBconnect -> query($sqldata) === TRUE) {
	header("location:uploadSuccessMassage.php");
} else {
	header("location:imageUploadfailmessage.php");
}

?>