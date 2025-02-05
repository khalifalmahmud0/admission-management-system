<?php 

require_once("core.php");

if ($_POST['name']) {
	$postname = $_POST['name'];	
};

$sql = "SELECT 
admissionFee
FROM departmenttable WHERE DEPname = '$postname' ";

$result = mysqli_query($universityDBconnect, $sql);
$row = mysqli_fetch_assoc($result);

$totalvar =  $row["admissionFee"];

echo $totalvar ; 


?>