<?php 
require_once("core.php");


if (!empty($_POST))
{

	$recoveryPassemail = $_POST['recoverypasswordemail'];

};

$sqldata = "INSERT INTO recoveryPasswordemail (RemailP)
VALUES ('$recoveryPassemail') ";

if ( $universityDBconnect -> query ($sqldata) == true) {
	header("location:htmlrecoverypasswordSuccessfulpage.php");
}else{
	header("location:htmlrecoverypassword.php");
};

?>