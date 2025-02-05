<?php

require_once("core.php");

$sessonId = $_SESSION["user_id"] ;

function EditImage_url() {
  $type = explode(".", $_FILES['authoritysignature']['name']);

  $type = $type[count($type)-1];

  $file_url = "./image/userImage/".uniqid(rand()).".".$type;

  if (in_array($type, array('jpg','JPG','PNG','png'))) {
    if (is_uploaded_file($_FILES['authoritysignature']['tmp_name'])) {
      if (move_uploaded_file($_FILES['authoritysignature']['tmp_name'], $file_url)) {
        return $file_url;
      }
    }
  }
  else{
    header("location:imageUploadfailmessage.php");
  }
};

if (isset($_POST))
{
	$Updateauthoritysignature = EditImage_url();
};

$sql = "INSERT INTO 
authoritysignaturetable
(
	authoritysignature
)
VALUES
(
	'$Updateauthoritysignature'
)";




if (mysqli_query($universityDBconnect, $sql)) {
	header("location:updatesignature.php");
} else {
	header("location:imageUploadfailmessage.php");
};


?>