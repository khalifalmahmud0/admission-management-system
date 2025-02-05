<?php 
require_once("core.php");

// student own image

function StudentPersonalImage_url() {
  $type = explode(".", $_FILES['StudentPersonalImage']['name']);
  $type = $type[count($type)-1];
  $file_url = "./image/StudentPersonalImageFolder/".uniqid(rand()).".".$type;
  if (in_array($type, array('jpg','JPG','PNG','png'))) {
    if (is_uploaded_file($_FILES['StudentPersonalImage']['tmp_name'])) {
      if (move_uploaded_file($_FILES['StudentPersonalImage']['tmp_name'],$file_url)) {
        return $file_url;
      }
    }
  }

  else{
    return "sorry does not mathch my extension";
  }

};

// student Signature

function StudentSignature() {
  $type = explode(".", $_FILES['StudentSignature']['name']);
  $type = $type[count($type)-1];
  $file_url = "./image/Student Signature/".uniqid(rand()).".".$type;
  if (in_array($type, array('jpg','JPG','PNG','png'))) {
    if (is_uploaded_file($_FILES['StudentSignature']['tmp_name'])) {
      if (move_uploaded_file($_FILES['StudentSignature']['tmp_name'],$file_url)) {
        return $file_url;
      }
    }
  }

  else{
    header("location:imageUploadfailmessage.php");
  }

};

// collect information from html start

if (isset($_POST)) {

// personal information
  $forcheck=$_POST['hide_admisson_button_id'];
  $sStudentName=$_POST['StudentName'];
  $sStudentFatherName=$_POST['StudentFatherName'];
  $sStudentMotherName=$_POST['StudentMotherName'];
  $sStudentDateOfBirth=$_POST['StudentDateOfBirth'];
  $sStudentReligion = $_POST['StudentReligion'];    
  $sStudentNidNo=$_POST['StudentNidNo'];
  $sStudentBirthCertificateNumber=$_POST['StudentBirthCertificateNumber'];
  $sstudentNationality = $_POST['studentNationality'];  
  $sstudentGender = $_POST['studentGender'];  
  $sStudentEmailAddress=$_POST['StudentEmailAddress'];
  $sStudentPhoneNumber=$_POST['StudentPhoneNumber'];
  $sStudentAdmitNo = $_POST['admitnumber'];  
  $sStudentAdmitionVarification = $_POST['admissionVerification'];  
  $sStudentPersonalImage = StudentPersonalImage_url() ;

// ssc exam information


  $sStudentSSCexamNameSelection=$_POST['StudentSSCexamNameSelection'];
  $sStudentSSCExamBoard=$_POST['StudentSSCExamBoard'];
  $sStudentSSCPassingYear=$_POST['StudentSSCPassingYear'];
  $sStudentSSCInstituteName=$_POST['StudentSSCInstituteName'];
  $sStudentSSCboardRoll=$_POST['StudentSSCboardRoll'];
  $sStudentSSCRegistrationNumber=$_POST['StudentSSCRegistrationNumber'];
  $sStudentSSCExamGroup=$_POST['StudentSSCExamGroup'];
  $sStudentSSCresult=$_POST['SSCResult'];

// hsc exam information

  $sStudentHSCexamNameSelection=$_POST['StudentHSCexamNameSelection'];
  $sStudentHSCExamBoard=$_POST['StudentHSCExamBoard'];
  $sStudentHSCPassingYear=$_POST['StudentHSCPassingYear'];
  $sStudentHSCInstituteName=$_POST['StudentHSCInstituteName'];
  $sStudentHSCboardRoll=$_POST['StudentHSCboardRoll'];
  $sStudentHSCRegistrationNumber=$_POST['StudentHSCRegistrationNumber'];
  $sStudentHSCExamGroup=$_POST['StudentHSCExamGroup'];
  $sStudentHSCresult=$_POST['HSCResult'];

// present address

  $sStudentPresentAddressVillageHouseRoad=$_POST['StudentPresentAddressVillageHouseRoad'];
  $sStudentPresentAddressDistrict=$_POST['StudentPresentAddressDistrict'];
  $sStudentPresentAddressUpozilla=$_POST['StudentPresentAddressUpozilla'];
  $sStudentPresentAddressPostOffice=$_POST['StudentPresentAddressPostOffice'];
  $sStudentPresentAddressPostCode=$_POST['StudentPresentAddressPostCode'];

// permanent address

  $sStudentpermanentAddressVillageHouseRoad=$_POST['StudentpermanentAddressVillageHouseRoad'];
  $sStudentpermanentAddressDistrict=$_POST['StudentpermanentAddressDistrict'];
  $sStudentpermanentAddressUpozilla=$_POST['StudentpermanentAddressUpozilla'];
  $sStudentpermanentAddressPostOffice=$_POST['StudentpermanentAddressPostOffice'];
  $sStudentpermanentAddressPostCode=$_POST['StudentpermanentAddressPostCode'];

// checkbox

  $sstudentunderstand1stcheckbox=$_POST['studentunderstand1stcheckbox'];
  $sstudentsubmition2ndcheckbox=$_POST['studentsubmition2ndcheckbox'];


// Student Signature


  $sstudentsignature=StudentSignature();

}
// collect information from html end

$useriiid = $_SESSION["user_id"];
$useriemail = $_SESSION["user_emailaddress"];



$sql = "
UPDATE 
studentinformation 
SET 
-- personal information
hide_admisson_button_id =$forcheck,
NameI='$sStudentName',
FatherNameI='$sStudentFatherName',
MotherNameI='$sStudentMotherName',
DateOfBirthI='$sStudentDateOfBirth',
ReligionI='$sStudentReligion',  
NIDNoI='$sStudentNidNo',
BirthCertificateNumberI='$sStudentBirthCertificateNumber',
NationalityI='$sstudentNationality' ,
GenderI='$sstudentGender',
EmailAddressI='$sStudentEmailAddress',
PhoneNumberI='$sStudentPhoneNumber',
admit_match=$sStudentAdmitNo,
admission_verification=$sStudentAdmitionVarification,
PersonalImageI= '$sStudentPersonalImage',

-- ssc exam information

SSCexamNameSelectionI='$sStudentSSCexamNameSelection',
SSCExamBoardI='$sStudentSSCExamBoard',
SSCPassingYearI='$sStudentSSCPassingYear',
SSCInstituteNameI='$sStudentSSCInstituteName',
SSCboardRollI='$sStudentSSCboardRoll',
SSCRegistrationNumberI='$sStudentSSCRegistrationNumber',
SSCExamGroupI='$sStudentSSCExamGroup',
SSCresultI='$sStudentSSCresult',


-- hsc exam information

HSCexamNameSelectionI='$sStudentHSCexamNameSelection',
HSCExamBoardI='$sStudentHSCExamBoard',
HSCPassingYearI='$sStudentHSCPassingYear',
HSCInstituteNameI='$sStudentHSCInstituteName',
HSCboardRollI='$sStudentHSCboardRoll',
HSCRegistrationNumberI='$sStudentHSCRegistrationNumber',
HSCExamGroupI='$sStudentHSCExamGroup',
HSCresultI='$sStudentHSCresult',


-- present address
PresentAddressVillageHouseRoadI=   '$sStudentPresentAddressVillageHouseRoad',
PresentAddressDistrictI='$sStudentPresentAddressDistrict',
PresentAddressUpozillaI='$sStudentPresentAddressUpozilla',
PresentAddressPostOfficeI='$sStudentPresentAddressPostOffice',
PresentAddressPostCodeI='$sStudentPresentAddressPostCode',

-- permanent address
permanentAddressVillageHouseRoadI='$sStudentpermanentAddressVillageHouseRoad',
permanentAddressDistrictI='$sStudentpermanentAddressDistrict',
permanentAddressUpozillaI='$sStudentpermanentAddressUpozilla',
permanentAddressPostOfficeI='$sStudentpermanentAddressPostOffice',
permanentAddressPostCodeI='$sStudentpermanentAddressPostCode',


-- checkbox

understand1stcheckboxI='$sstudentunderstand1stcheckbox',
submition2ndcheckboxI='$sstudentsubmition2ndcheckbox',

-- Student Signature

StudentSignatureI='$sstudentsignature'

WHERE 
hiddennumber=$useriiid
";

// Check connection........................................
if (mysqli_query($universityDBconnect, $sql)) {
  header("location:uploadSuccessMassage.php");
} else {
  header("location:imageUploadfailmessage.php");
}




// .....................................

$sql = "SELECT Student_Choice_department FROM studentinformation WHERE hiddennumber=$useriiid";
$result = mysqli_query($universityDBconnect, $sql);

if (mysqli_num_rows($result) > 0) {
// output data of each row
  while($row = mysqli_fetch_assoc($result)) {

    $totalseatTable = $row["Student_Choice_department"];




  }
} else {
  echo "0 results";
}

echo "<hr/>";

$sql = "SELECT * FROM departmenttable WHERE DEPname = '$totalseatTable'";
$result = mysqli_query($universityDBconnect, $sql);

if (mysqli_num_rows($result) > 0) {
// output data of each row
  while($row = mysqli_fetch_assoc($result)) {

    $totalseat = $row["totalseat"];
    $fillupseat = $row["fillupseat"];
    $blankseat = $row["blankseat"];
    $depid = $row["id"];



  }
} else {
  echo "0 results";
}


if ($fillupseat<$totalseat) {

  $fillup = $fillupseat + 1;
  $blanks = $blankseat - 1;




  $sql = "UPDATE 
  departmenttable 
  SET 
  fillupseat=$fillup,
  blankseat=$blanks 
  WHERE 
  id=$depid";

// Check connection........................................
  if (mysqli_query($universityDBconnect, $sql)) {
    echo "success";

  } else {
    echo "Error updating record: " . mysqli_error($universityDBconnect);
  }


} else {


  echo "nai";
};

//captcha php code start
$captcha;$success;
if(isset($_POST['g-recaptcha-response'])){
  $captcha=$_POST['g-recaptcha-response'];
}
if(!$captcha){
  header('Location: captchaFailedPage.php');
}else
{
  if ($universityDBconnect ->query($sqldata) === TRUE) {
    header('Location: regestrationPageSuccessful.php');
  } else {
// header('Location: regestrationPageFail.php');
    echo "Error creating database: " . mysqli_error($universityDBconnect);
  };
};
$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdVXjEUAAAAAAR4oFVRxpDHasIUXT9HR7yk9kc0&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);

//captcha php code End

?>