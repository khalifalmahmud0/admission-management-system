<?php 
require_once("core.php");

if (isset($_POST))
{
	$confirm=$_POST['kkkkname'];
};

$result=mysqli_query($universityDBconnect,"UPDATE paymenttable SET varification =1 WHERE id='$confirm'");
header("location:html_tables_dynamic.php");

?>