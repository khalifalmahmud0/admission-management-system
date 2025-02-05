<?php 
require_once("core.php");

$sessonId = $_SESSION["user_id"] ;


function EditImage_url() {
  $type = explode(".", $_FILES['editUserProfilePhoto']['name']);

  $type = $type[count($type)-1];

  $file_url = "./image/userImage/".uniqid(rand()).".".$type;

  if (in_array($type, array('jpg','JPG','PNG','png'))) {
    if (is_uploaded_file($_FILES['editUserProfilePhoto']['tmp_name'])) {
      if (move_uploaded_file($_FILES['editUserProfilePhoto']['tmp_name'], $file_url)) {
        return $file_url;
      }
    }
  }
  else{
    header("location:imageUploadfailmessage.php");
  }
};




if (isset($_POST)) {
  $editusernamme=$_POST['editUserName'];
  $edituseremailaddress=$_POST['editUseremail'];
  $edituserprofilepic=EditImage_url();
};


$sql = "UPDATE tableforcreateaccount SET  
CusernameA='$editusernamme',
CemailA='$edituseremailaddress', 
CimageurlA='$edituserprofilepic' 
WHERE id=$sessonId" ;

if ($universityDBconnect->query($sql) === TRUE) {
  header("location:user.php");
} else {
// echo "Error updating record: " .$universityDBconnect->error;
  header("location:userprofileUpdatefailed.php");
}

?>