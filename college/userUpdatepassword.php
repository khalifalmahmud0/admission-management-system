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
            <h4 class="title">Change password</h4>
          </div>
          <div class="content">

            <form action="userpasswordupdateDb.php" method="POST" accept-charset="utf-8">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Enter your New Password</label>
                    <input name="EnteryourNewPassword" type="text" class="form-control" required="">
                  </div>
                </div>

              </div>

              

              <button type="submit" class="btn btn-info btn-fill pull-right">Update</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>


      <div class="col-md-4 procoverdivdivdiv">
        <div class="card card-user procoverdivdiv">
          <div class="image procoverdiv ">
            <h1 align="center" class="procover"> Profile </h1>
          </div>


          <div class="content">
            <div class="author">
              <a href="#">


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
// $emailEdit = $row["CemailA"];
// $imageEdit = $row["CimageurlA"];
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
// $userNameEdit = $row["CusernameA"];
                      $emailEdit = $row["CemailA"];
// $imageEdit = $row["CimageurlA"];
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

