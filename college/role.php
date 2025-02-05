<?php 
require_once("core.php");


if (!empty($_POST))
{
	$role_email = $_POST['roleemail'];
	$user_typeaa = $_POST['roleroleTYPE'];
};

$sql = "UPDATE tableforcreateaccount SET UserType=$user_typeaa WHERE CemailA='$role_email'";

// Check connection........................................
if (mysqli_query($universityDBconnect, $sql)) {
	header("location:uploadSuccessMassage.php");
} else {
	header("location:imageUploadfailmessage.php");
}

?>