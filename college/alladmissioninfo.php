<?php require_once("header.php") ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">


      <div class="col-sm-12 paymenttooooop">
        <h1 class="paymentconfirm">Admission Information</h1>
      </div>

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>All Role</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <table id="datatable-buttons" class="table table-striped table-bordered" style="width: 1px;">
              <thead>
                <tr>

                  <th>Name</th>
                  <th>Image</th>
                  <th>Father Name</th>
                  <th>Mother Name</th>
                  <th>Gender</th>
                  <th>Date Of Birth</th>
                  <th>Phone Number</th>
                  <th>Email Address</th>
                  <th>Religion</th>
                  <th>NIDNo</th>
                  <th>Birth Certificate Number</th>
                  <th>Nationality</th>





                  <th>SSC Exam Board</th>
                  <th>SSC Passing Year</th>
                  <th>SSC Institute Name</th>
                  <th>SSC Board Roll</th>
                  <th>SSC Registration Number </th>
                  <th>SSC Exam Group</th>
                  <th>SSC Result</th>


                  <th>HSC Exam Board</th>
                  <th>HSC Passing Year</th>
                  <th>HSC Institute Name</th>
                  <th>HSC Board Roll</th>
                  <th>HSC Registration Number</th>
                  <th>HSC Exam Group</th>
                  <th>HSC Result</th>


                  <th>PresentAddress Village/House/Road</th>
                  <th>Present Address District</th>
                  <th>Present Address Upozilla</th>
                  <th>Present Address PostOffice</th>
                  <th>Present Address PostCode</th>


                  <th>permanent Address Village/House/Road</th>
                  <th>permanent Address District</th>
                  <th>permanent Address Upozilla</th>
                  <th>permanent Address PostOffice</th>
                  <th>permanent Address PostCode</th>

                </tr>
              </thead>



              <?php

              $sqlselectee = "SELECT *FROM studentinformation";

              $resultss = $universityDBconnect -> query($sqlselectee) ;

              if ($resultss -> num_rows) {
                while ($row=$resultss -> fetch_assoc()) {

                  ?>

                  <tr>


                    <td> <?php echo $row["NameI"]; ?> </td>
                    <td> 
                      <img class="img-responsive  imagecimage thumbnail"  height="100px" width="150px" src="<?php echo $row["PersonalImageI"]; ?> " alt="student" >

                    </td>
                    <td> <?php echo $row["FatherNameI"]; ?> </td>
                    <td> <?php echo $row["MotherNameI"]; ?> </td>
                    <td> <?php echo $row["GenderI"]; ?> </td>
                    <td> <?php echo $row["DateOfBirthI"]; ?> </td>
                    <td> <?php echo $row["PhoneNumberI"]; ?> </td>
                    <td> <?php echo $row["EmailAddressI"]; ?> </td>
                    <td> <?php echo $row["ReligionI"]; ?> </td>
                    <td> <?php echo $row["NIDNoI"]; ?> </td>
                    <td> <?php echo $row["BirthCertificateNumberI"]; ?> </td>
                    <td> <?php echo $row["NationalityI"]; ?> </td>





                    <td> <?php echo $row["SSCExamBoardI"]; ?> </td>
                    <td> <?php echo $row["SSCPassingYearI"]; ?> </td>
                    <td> <?php echo $row["SSCInstituteNameI"]; ?> </td>
                    <td> <?php echo $row["SSCboardRollI"]; ?> </td>
                    <td> <?php echo $row["SSCRegistrationNumberI"]; ?> </td>
                    <td> <?php echo $row["SSCExamGroupI"]; ?> </td>
                    <td> <?php echo $row["SSCresultI"]; ?> </td>



                    <td> <?php echo $row["HSCExamBoardI"]; ?> </td>
                    <td> <?php echo $row["HSCPassingYearI"]; ?> </td>
                    <td> <?php echo $row["HSCInstituteNameI"]; ?> </td>
                    <td> <?php echo $row["HSCboardRollI"]; ?> </td>
                    <td> <?php echo $row["HSCRegistrationNumberI"]; ?> </td>
                    <td> <?php echo $row["HSCExamGroupI"]; ?> </td>
                    <td> <?php echo $row["HSCresultI"]; ?> </td>


                    <td> <?php echo $row["PresentAddressVillageHouseRoadI"]; ?> </td>
                    <td> <?php echo $row["PresentAddressDistrictI"]; ?> </td>
                    <td> <?php echo $row["PresentAddressUpozillaI"]; ?> </td>
                    <td> <?php echo $row["PresentAddressPostOfficeI"]; ?> </td>
                    <td> <?php echo $row["PresentAddressPostCodeI"]; ?> </td>


                    <td> <?php echo $row["permanentAddressVillageHouseRoadI"]; ?> </td>
                    <td> <?php echo $row["permanentAddressDistrictI"]; ?> </td>
                    <td> <?php echo $row["permanentAddressUpozillaI"]; ?> </td>
                    <td> <?php echo $row["permanentAddressPostOfficeI"]; ?> </td>
                    <td> <?php echo $row["permanentAddressPostCodeI"]; ?> </td>


                    <?php

                  }
                }else{
                  echo "ami aste pari nai";
                }
                ?>
              </tr>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once("footer.php"); ?>

