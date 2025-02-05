<?php 

require_once("core.php");

if (!empty($_POST["ccusername"] && $_POST["cconfirmpassword"])) {
    $passw = md5($_POST["cconfirmpassword"]);
    $result = mysqli_query($universityDBconnect, "SELECT * FROM tableforcreateaccount WHERE 
        ( CusernameA= '".$_POST["ccusername"]."' OR CemailA ='".$_POST["ccusername"]."')
        AND CconfirmpasswordA = '".$passw."'" );
};


$row = mysqli_fetch_array($result);

if (is_array($row)) {

    $_SESSION["user_name"] = $row["CusernameA"];
    $_SESSION["user_emailaddress"] = $row["CemailA"];
    $_SESSION["user_image"] = $row["CimageurlA"];
    $_SESSION["user_id"] = $row["id"];
    $_SESSION["user_type"] = $row["UserType"];

    header("location:dashboard.php");
}else{
    header("location:index.php");
}
?>