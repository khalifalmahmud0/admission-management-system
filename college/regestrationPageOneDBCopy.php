<?php 
require_once("core.php");

if($_POST){

	$hiddenttypestu = $_POST['hiddentype'];

	$StudentAccountName=$_POST['nameaccounter'];

	$StudentChoicedepartment=$_POST['departmentchoice'];

};



$sqldata = "INSERT INTO studentinformation 
(
	hiddennumber ,
	Student_Account_Name,
	Student_Choice_department

)

VALUES 
(
	'$hiddenttypestu',
	'$StudentAccountName',
	'$StudentChoicedepartment'
) ";

if (mysqli_query($universityDBconnect, $sqldata)) {
	header('Location: htmlRegistration.php');
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($universityDBconnect);
};


echo "<hr/>";


?>