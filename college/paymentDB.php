<?php 

require_once("core.php");

if (isset($_POST))
{
	$namepaymentervariable = $_POST['namepaymenter'];
	$departmentchoice = $_POST['departmentchoice'];
	$paymenttypevariable = $_POST['paymenttypee'];
	$cashreceptvariable = $_POST['cashrecept'];
	$amountvariable = $_POST['amountamount'];
	$statuselectvariable = $_POST['statuselect'];
	$datevariable = $_POST['datedate'];
	$SendermobileNumbervariable = $_POST['SendermobileNumber'];
	$MerchantmobileNumbervariable = $_POST['MerchantmobileNumber'];
	$Referancevariable = $_POST['Referance'];
	$CounterNovariable = $_POST['CounterNo'];
	$TrxiDvariable = $_POST['TrxiD'];
	$user_match = $_POST['amountamount1'];
};

$sqldata = "INSERT INTO paymenttable 
(
	name,
	department,
	paymentTypeT,
	AmountT,
	statusT,
	DateT,
	CashReceptNumberT,
	SenderNumberT,
	MerchantNumberT,
	ReferanceT,
	CounterNumberT,
	TrxidT,
	varification,
	user_match
)
VALUES 
(
	'$namepaymentervariable',
	'$departmentchoice',
	'$paymenttypevariable',
	'$amountvariable',
	'$statuselectvariable',
	'$datevariable',
	'$cashreceptvariable',
	'$SendermobileNumbervariable',
	'$MerchantmobileNumbervariable',
	'$Referancevariable',
	'$CounterNovariable',
	'$TrxiDvariable',
	0,
	$user_match
) ";

if ( $universityDBconnect -> query ($sqldata) == true) {
	header("location:paymentsuccess.php");
}else{
// header("location:paymentfail.php");
	echo "Error creating table: " . $universityDBconnect->error;
};
?>