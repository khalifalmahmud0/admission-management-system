<?php
require_once("core.php");

if (isset($_POST))
{
    $Dname=$_POST['ddname'];
    $Dseat=$_POST['ddtotalseat'];
    $Dsartdate=$_POST['AdmissionStratTime'];
    $Denddate=$_POST['AdmissionEndTime'];
    $Dfee=$_POST['Admissionfee'];
    $DAdmissionExamDate=$_POST['AdmissionExamDate'];
    $DAdmissionResultDate=$_POST['AdmissionResultDate'];
    $DAdmissionrexamtime=$_POST['Admissionrexamtime'];
};

$sql = "INSERT INTO 
departmenttable
(
    DEPname ,
    totalseat ,
    fillupseat ,
    blankseat ,
    startdate ,
    enddate ,
    admissionFee, 
    AdmissionExamDate, 
    AdmissionResultDate,
    Admissionrexamtime 
)
VALUES
(
    '$Dname',
    '$Dseat',
    0,
    '$Dseat',
    '$Dsartdate',
    '$Denddate',
    '$Dfee',
    '$DAdmissionExamDate',
    '$DAdmissionResultDate',
    '$DAdmissionrexamtime'
)";


if (mysqli_query($universityDBconnect, $sql)) {
    header("location:uploadSuccessMassage.php");
} else {
   header("location:imageUploadfailmessage.php");
}

?>