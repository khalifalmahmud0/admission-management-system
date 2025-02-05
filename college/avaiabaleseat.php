<?php 

require_once("core.php");

if ($_POST['name']) {
	$postname = $_POST['name'];	
};

$sql = "SELECT 
blankseat
FROM departmenttable WHERE DEPname = '$postname' ";

$result = mysqli_query($universityDBconnect, $sql);
$row = mysqli_fetch_assoc($result);

$totalvar =  $row["blankseat"];

echo $totalvar ; 


?>