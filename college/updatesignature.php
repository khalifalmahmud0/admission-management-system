<?php  require_once("header.php"); ?> 

<div class="content">
    <div class="container-fluid">


        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Update Authority Signature</h4>
                    </div>
                    <div class="content">

                        <form action="updatesignatureDB.php" method="POSt" accept-charset="utf-8" enctype="multipart/form-data">


                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="profilePhoto">Change Signature</label>
                                        <input type="file" class="form-control" name="authoritysignature" required="">
                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-info btn-fill pull-right">Update Signature</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>



            <div class="col-md-4 procoverdivdivdiv">
                <div class="card card-user procoverdivdiv">
                    <div class="image procoverdiv ">
                        <h1 align="center" class="procover">Latest Signature</h1>
                    </div>


                    <div class="content">
                        <div class="author">
                            <a href="#">

                                <!-- for image edit start -->


                                <?php 

                                

                                $sqlAss = "SELECT * FROM authoritysignaturetable ";

                                $resultA = mysqli_query($universityDBconnect, $sqlAss);

                                if (mysqli_num_rows($resultA) > 0) {
                                    while($row = mysqli_fetch_assoc($resultA)) {
                                        $imageEdit = $row["authoritysignature"];
                                    }
                                };
                                ?>
                                <!-- for image edit end -->

                                <img class="" src="<?php echo $imageEdit; ?>" alt="sig_image"/>

                                </h4>
                            </a>
                        </div>
                    </div>

                    <hr/>


                </div>
            </div>

        </div>
    </div>
</div>


<?php  require_once("footer.php"); ?>

