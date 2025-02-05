<?php  require_once("header.php"); ?> 
<div class="content ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="content dashboardcontent">
                        <div class="typo-line textdashtypema">

                            <?php 

                            $sql = "SELECT * FROM updatesiteintroduction";
                            $result = mysqli_query($universityDBconnect, $sql);

                            if (mysqli_num_rows($result) > 0) {
// output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                    $SiteIntroUPDATE = $row["SiteIntroductionUPDATE"];
                                }
                            }
                            ?>


                            <h1 class="textdashtype"><?php echo $SiteIntroUPDATE; ?></h1>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php  require_once("footer.php"); ?>
