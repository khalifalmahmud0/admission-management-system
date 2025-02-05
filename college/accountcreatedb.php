<?php 

require_once("core.php");

//image file start
function Image_url() {
	$type = explode(".", $_FILES['curl']['name']);

	$type = $type[count($type)-1];

	$file_url = "./image/userImage/".uniqid(rand()).".".$type;

	if (in_array($type, array('jpg','JPG','PNG','png'))) {
		if (is_uploaded_file($_FILES['curl']['tmp_name'])) {
			if (move_uploaded_file($_FILES['curl']['tmp_name'], $file_url)) {
				return $file_url;
			}
		}
	}
	else{
		return "sorry does not mathch my extension";
	}
};

//image file end

if (!empty($_POST))
{
	$usernameA = $_POST['cusername'];
	$emailA = $_POST['cemail'];
	$passwordA = $_POST['cfirstpassword'];
	$confirmpasswordA = $_POST['confirmpassword'];
	$imageurlA = Image_url();

};


if ($passwordA != $confirmpasswordA ) {

	header("location:htmlpasswordNotmatch.php");
	exit();
}else{



	$pas = md5($confirmpasswordA);



	$sqldata = "INSERT INTO tableforcreateaccount (CusernameA, CemailA, CconfirmpasswordA,CimageurlA)
	VALUES ('$usernameA', '$emailA',
	'$pas' ,'$imageurlA') ";



	if ( $universityDBconnect -> query ($sqldata) == true) {
		header("location:htmlCreateAccountSuccessful.php");
	}else{
		header("location:htmlCreateaAccountFail.php");
	};

};

?>


