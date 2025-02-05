<?php  require_once("header.php"); ?> 

<div class="content">
    <div class="container-fluid">

        <div class="col-sm-12 paymenttooooop">
            <span class="paymentmenu">
                <a href="user.php" title="ByDutchBanglaMobileBanking" class="btn btn-info">Edit your profile</a>
                <a href="userSocialMediaLink.php" title="socialLink" class="btn btn-info">Update Your Social Media Link</a>
                <a href="userUpdatepassword.php" title="ByCash" class="btn btn-info">Change Your Password</a>
            </span>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Profile</h4>
                    </div>
                    <div class="content">

                        <form action="userprofikeDB.php" method="POSt" accept-charset="utf-8" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input required="" name="editUserName" type="text" class="form-control" placeholder="Name" value="<?php echo $_SESSION["user_name"]; ?>" >
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input required="" name="editUseremail" type="email" class="form-control" placeholder="Email" value="<?php echo $_SESSION["user_emailaddress"]; ?>" >
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="profilePhoto">Change Profile photo</label>
                                        <input type="file" class="form-control" name="editUserProfilePhoto" required="">
                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>



            <div class="col-md-4 procoverdivdivdiv">
                <div class="card card-user procoverdivdiv">
                    <div class="image procoverdiv ">
                        <h1 align="center" class="procover">  Profile </h1>
                    </div>


                    <div class="content">
                        <div class="author">
                            <a href="#">

                                <!-- for image edit start -->


                                <?php 

                                $myida = $_SESSION["user_id"];

                                $sqlAss = "SELECT * FROM tableforcreateaccount WHERE id =$myida ";

                                $resultA = mysqli_query($universityDBconnect, $sqlAss);

                                if (mysqli_num_rows($resultA) > 0) {
                                    while($row = mysqli_fetch_assoc($resultA)) {
                                        $imageEdit = $row["CimageurlA"];
                                    }
                                };
                                ?>
                                <!-- for image edit end -->

                                <img class="avatar border-gray" src="<?php echo $imageEdit; ?>" alt="user_image"/>

                                <!-- for name edit start -->


                                <?php 

                                $myid = $_SESSION["user_id"];

                                $sqlA = "SELECT * FROM tableforcreateaccount WHERE id =$myid ";

                                $resultA = mysqli_query($universityDBconnect, $sqlA);

                                if (mysqli_num_rows($resultA) > 0) {
// output data of each row
                                    while($row = mysqli_fetch_assoc($resultA)) {
                                        $userNameEdit = $row["CusernameA"];

                                    }
                                };
                                ?>
                                <!-- for name edit end -->

                                <h4 class="title"><?php echo $userNameEdit ; ?><br />


                                    <!-- for email edit start -->


                                    <?php 

                                    $myid = $_SESSION["user_id"];

                                    $sqlA = "SELECT * FROM tableforcreateaccount WHERE id =$myid ";

                                    $resultA = mysqli_query($universityDBconnect, $sqlA);

                                    if (mysqli_num_rows($resultA) > 0) {
// output data of each row
                                        while($row = mysqli_fetch_assoc($resultA)) {

                                            $emailEdit = $row["CemailA"];

                                        }
                                    };
                                    ?>
                                    <!-- for email edit end -->



                                    <small><?php echo $emailEdit ; ?></small>

                                </h4>
                            </a>
                        </div>
                    </div>

                    <hr/>





                    <!-- for facebook edit start -->
                    <?php 

                    $myidd = $_SESSION["user_id"];
                    $sqlAb = "SELECT * FROM tableforcreateaccount WHERE id =$myidd ";
                    $resultAb = mysqli_query($universityDBconnect, $sqlAb);
                    if (mysqli_num_rows($resultAb) > 0) {
                        while($row = mysqli_fetch_assoc($resultAb)) {
                            $UserFacebookxx = $row["UserFacebook"];
                        }
                    };
                    ?>
                    <!-- for facebook edit end -->

                    <!-- twitter start -->
                    <?php 
                    $myidd = $_SESSION["user_id"];
                    $sqlAb = "SELECT * FROM tableforcreateaccount WHERE id =$myidd ";
                    $resultAb = mysqli_query($universityDBconnect, $sqlAb);
                    if (mysqli_num_rows($resultAb) > 0) {
                        while($row = mysqli_fetch_assoc($resultAb)) {
                            $Usertwitterxx = $row["Usertwitter"];
                        }
                    };
                    ?>
                    <!-- twitter end -->


                    <!-- google plus start -->
                    <?php 
                    $myidd = $_SESSION["user_id"];
                    $sqlAb = "SELECT * FROM tableforcreateaccount WHERE id =$myidd ";
                    $resultAb = mysqli_query($universityDBconnect, $sqlAb);
                    if (mysqli_num_rows($resultAb) > 0) {
                        while($row = mysqli_fetch_assoc($resultAb)) {
                            $UserGooglePlusxx = $row["UserGooglePlus"];
                        }
                    };
                    ?>
                    <!-- google plus end -->


                    <div class="text-center">


                        <a href="<?php echo $UserFacebookxx ; ?>" title="facebook" target="_blank">
                            <i class="fa fa-facebook-square  socialiconStyle"> </i> 
                        </a>

                        <a href="<?php echo $Usertwitterxx ; ?>" title="facebook" target="_blank">
                            <i class="fa fa-twitter socialiconStyle"></i>
                        </a>
                        <a href="<?php echo $UserGooglePlusxx ; ?>" title="facebook" target="_blank">
                            <i class="fa fa-google-plus-square socialiconStyle"></i>
                        </a>


                    </div>


                </div>
            </div>

        </div>
    </div>
</div>


<?php  require_once("footer.php"); ?>

