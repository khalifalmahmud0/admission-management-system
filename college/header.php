<?php require_once("core.php"); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <!-- <link rel="icon" type="image/png" href="assets/img/favicon.ico"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <?php 

    $sql = "SELECT * FROM updatesitetitle";

    $result = mysqli_query($universityDBconnect, $sql);

    if (mysqli_num_rows($result) > 0) {
// output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $SiteTitless = $row["SiteTitle"];
        }
    };
    ?>
    <title><?php echo $SiteTitless; ?></title>


    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="css/customcustom.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet" />
</head>





<body>

    <div class="wrapper login">
        <div class="sidebar" data-color="gray" data-image="assets/img/sidebar-5.jpg">

            <?php 

            $sql = "SELECT * FROM updatesitename";

            $result = mysqli_query($universityDBconnect, $sql);

            if (mysqli_num_rows($result) > 0) {
// output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $siteupdatename = $row["SiteNameUpdate"];
                }
            }
            ?>

            <div class="sidebar-wrapper">
                <div class="logo">
                    <div class="sitenamestylediv">
                        <a href="dashboard.php" class="simple-text  sitenamestyle " style="color: deepskyblue;font-weight: bold;font-size: 19px;">
                            <?php echo $siteupdatename; ?>
                        </a>
                    </div>
                </div>

                <ul class="nav">

                    <!-- Role .......0...........0.............. -->


                    <?php if ($_SESSION["user_type"]==0): ?>

                        <li>
                            <a href="user.php">
                                <i class="fontclass fa fa-user-o" aria-hidden="true"></i>
                                <p>Profile</p>
                            </a>
                        </li>

                        <li>
                            <a href="htmlDEPARTMENTallInfo.php">
                                <i class="fontclass fa fa-university" aria-hidden="true"></i>
                                <p>Department</p>
                            </a>
                        </li>



                        <?php 

                        $usernumbers = $_SESSION["user_id"];

                        $sqls = "SELECT * FROM studentinformation WHERE hide_admisson_button_id=$usernumbers";
                        $resultss = mysqli_query($universityDBconnect, $sqls);

                        if (mysqli_num_rows($resultss) == 0) {
                            ?>
                            <li>
                                <a href="htmlpaymentCash.php">
                                    <i class="fontclass fa fa-cc-mastercard" aria-hidden="true"></i>
                                    <p>Payment Now</p>
                                </a>
                            </li> 

                            <?php  
                        } else {

                            ?>

                            <li>
                                <a disabled>
                                    <i class="fontclass fa fa-cc-mastercard" aria-hidden="true"></i>
                                    <p>Payment Now</p>
                                </a>
                            </li> 

                            <?php  

                        };


                        $usernumber = $_SESSION["user_id"];
                        $sqlselect = "SELECT  varification FROM paymenttable WHERE user_match = $usernumber ";
                        $result = mysqli_query($universityDBconnect, $sqlselect);
                        if (mysqli_num_rows($result) > 0) {

                            while($row = mysqli_fetch_assoc($result)) {

                                if($row["varification"]==1){

                                    $sql = "SELECT * FROM studentinformation WHERE hide_admisson_button_id=$usernumber";
                                    $results = mysqli_query($universityDBconnect, $sql);

                                    if (mysqli_num_rows($results) == 0) {
                                        ?>

                                        <li>
                                            <a href="departmentInformation.php">
                                                <i class="fontclass fa fa-rss" aria-hidden="true"></i>
                                                <p>Admission Now</p>
                                            </a>
                                        </li> 

                                        <?php  
                                    } else {

                                        ?>

                                        <li>
                                            <a disabled>
                                                <i class="fontclass fa fa-rss" aria-hidden="true"></i>
                                                <p>Admission Now</p>
                                            </a>
                                        </li> 

                                        <?php  

                                    }

                                }

                            }
                        }

                        $usernumber = $_SESSION["user_id"];


                        $sqlselect = "SELECT  admission_verification FROM studentinformation WHERE admit_match = $usernumber ";

                        $result = $universityDBconnect -> query($sqlselect) ;


                        if ($result -> num_rows) {

                            while ($row=$result -> fetch_assoc()) {

                                if($row["admission_verification"]==1){

                                    ?>
                                    <li>
                                        <a href="htmladmitcard.php">
                                            <i class="fontclass fa fa-id-card" aria-hidden="true"></i>
                                            <p>Admit Card</p>
                                        </a>
                                    </li> 
                                    <?php  
                                }

                            }
                        }

                        ?>
                    <?php endif ?>
                    <!-- Role management for .......1...........Administator.............. -->
                    <?php if ($_SESSION["user_type"]==1): ?>

                        <li>
                            <a href="user.php">
                                <i class="fontclass fa fa-user-o" aria-hidden="true"></i>
                                <p>Profile</p>
                            </a>
                        </li>

                        <li>
                            <a href="htmlAddRole.php">
                                <i class="fontclass fa fa-cog fa-spin fa-3x fa-fw"></i>
                                <span class="sr-only">Loading...</span>
                                <p>Role Management</p>
                            </a>
                        </li>
                        <li>
                            <a href="updatesitename.php">
                                <i class="fontclass fa fa-pencil-square-o" aria-hidden="true"></i>
                                <p>Site Name</p>
                            </a>
                        </li>

                        <li>
                            <a href="updateIntroDuction.php">
                                <i class="fontclass fa fa-eye" aria-hidden="true"></i>
                                <p>Intro Title</p>
                            </a>
                        </li>

                        <li>
                            <a href="ChangeSiteTitle.php">
                                <i class="fontclass fa fa-stack-exchange" aria-hidden="true"></i>
                                <p>Site Title</p>
                            </a>
                        </li>

                        <li>
                            <a href="updatelatestnews.php">
                                <i class="fontclass fa fa-exchange" aria-hidden="true"></i>
                                <p>Latest News</p>
                            </a>
                        </li>

                        <li>
                            <a href="newsupdateAll.php">
                                <i class="fontclass fa fa-list-alt" aria-hidden="true"></i>
                                <p>Latest News List</p>
                            </a>
                        </li>


                        <li>
                            <a href="updatesignature.php">
                                <i class="fontclass fa fa-list-alt" aria-hidden="true"></i>
                                <p>Update Authority Signature</p>
                            </a>
                        </li>


                        <li>
                            <a href="htmlDEPERTmentINFORMATION.php">
                                <i class="fontclass fa fa-plus-circle" aria-hidden="true"></i>
                                <p>Add Department</p>
                            </a>
                        </li>



                        <li>
                            <a href="htmlDEPARTMENTallInfo.php">
                                <i class="fontclass fa fa-university" aria-hidden="true"></i>
                                <p>Department</p>
                            </a>
                        </li>

                        <li>
                            <a href="htmlpaymentCash.php">
                                <i class="fontclass fa fa-cc-mastercard" aria-hidden="true"></i>
                                <p>Payment Now</p>
                            </a>
                        </li>

                        <li>
                            <a href="html_tables_dynamic.php">
                                <i class="fontclass fa fa-th-list" aria-hidden="true"></i>
                                <p>Payment Activities</p>
                            </a>
                        </li>


                        <li>
                            <a href="departmentInformation.php">
                                <i class="fontclass fa fa-rss" aria-hidden="true"></i>
                                <p>Admission Now</p>
                            </a>
                        </li> 


                        <li>
                            <a href="alladmissioninfo.php">
                                <i class="fontclass fa fa-list-ol" aria-hidden="true"></i>
                                <p>Admission List</p>
                            </a>
                        </li> 


                        <li>
                            <a href="htmladmitcard.php">
                                <i class="fontclass fa fa-id-card" aria-hidden="true"></i>
                                <p>Admit Card</p>
                            </a>
                        </li> 

                    <?php endif ?>

                    <!-- Role management for .......2...........Editor.............. -->

                    <?php if ($_SESSION["user_type"]==2): ?>

                        <li>
                            <a href="user.php">
                                <i class="fontclass fa fa-user-o" aria-hidden="true"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li>
                            <a href="updatesitename.php">
                                <i class="fontclass fa fa-pencil-square-o" aria-hidden="true"></i>
                                <p>Site Name</p>
                            </a>
                        </li>

                        <li>
                            <a href="updateIntroDuction.php">
                                <i class="fontclass fa fa-eye" aria-hidden="true"></i>
                                <p>Intro Title</p>
                            </a>
                        </li>

                        <li>
                            <a href="ChangeSiteTitle.php">
                                <i class="fontclass fa fa-stack-exchange" aria-hidden="true"></i>
                                <p>Site Title</p>
                            </a>
                        </li>
                        <li>
                            <a href="updatelatestnews.php">
                                <i class="fontclass fa fa-exchange" aria-hidden="true"></i>
                                <p>Latest News</p>
                            </a>
                        </li>

                        <li>
                            <a href="newsupdateAll.php">
                                <i class="fontclass fa fa-list-alt" aria-hidden="true"></i>
                                <p>Latest News List</p>
                            </a>
                        </li>



                        <li>
                            <a href="htmlDEPERTmentINFORMATION.php">
                                <i class="fontclass fa fa-plus-circle" aria-hidden="true"></i>
                                <p>Add Department</p>
                            </a>
                        </li>


                        <li>
                            <a href="htmlDEPARTMENTallInfo.php">
                                <i class="fontclass fa fa-university" aria-hidden="true"></i>
                                <p>Department</p>
                            </a>
                        </li>

                    <?php endif ?>


                    <!-- Role management for .......3...........Contributor.............. -->
                    <?php if ($_SESSION["user_type"]==3): ?>

                        <li>
                            <a href="user.php">
                                <i class="fontclass fa fa-user-o" aria-hidden="true"></i>
                                <p>Profile</p>
                            </a>
                        </li>

                        <li>
                            <a href="newsupdateAll.php">
                                <i class="fontclass fa fa-list-alt" aria-hidden="true"></i>
                                <p>Latest News List</p>
                            </a>
                        </li>

                        <li>
                            <a href="htmlDEPARTMENTallInfo.php">
                                <i class="fontclass fa fa-university" aria-hidden="true"></i>
                                <p>Department</p>
                            </a>
                        </li>

                    <?php endif ?>
                    <!-- role management 3 end -->

                </ul>
            </div>
        </div>

        <div class="main-panel"  data-color="gray" data-image="assets/img/sidebar-5.jpg">
            <nav class="navbar navbar-default navbar-fixed">

                <div class="container-fluid">
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="logout.php">
                                    <p>Log out</p>
                                </a>
                            </li>

                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                    </div>
                </div>

                <!-- update news start -->

                <?php 

                $sql = "SELECT * FROM updatelatestnews";
// or 
// $sql = "SELECT id, firstname, lastname FROM MyGuests";

// Check connection........................................

                $result = mysqli_query($universityDBconnect, $sql);

                if (mysqli_num_rows($result) > 0) {
// output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        $newwwws = $row["news"];
                    }
                }
                ?>

                <!-- updatenews end -->




                <div class="container-fluid">
                    <div class="collapse navbar-collapse">
                        <marquee style ="color: white;
                        background-color: #2A3F54;">
                        Latest News : <?php echo $newwwws; ?>

                    </marquee>   

                    <li class="separator hidden-lg hidden-md"></li>
                </div>
            </div>

        </nav>



