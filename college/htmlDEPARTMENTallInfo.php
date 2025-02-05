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

            <table id="datatable-buttons" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Department</th>
                  <th>Total seat</th>
                  <th>Fillup seat</th>
                  <th>Blank seat</th>
                  <th>Admission Strat Time</th>
                  <th>Admission End Time</th>
                  <th>Admission fee</th>

                </tr>
              </thead>



              <?php
              $sqlselect = "SELECT 
              id,
              DEPname, 
              totalseat, 
              fillupseat, 
              blankseat, 
              startdate, 
              enddate,
              admissionFee



              FROM 
              departmenttable";

              $result = $universityDBconnect -> query($sqlselect) ;

              if ($result -> num_rows) {
                while ($row=$result -> fetch_assoc()) {

                  ?>

                  <tr>
                    <td> <?php echo $row["DEPname"]; ?> </td>
                    <td><?php echo $row["totalseat"]; ?></td>
                    <td><?php echo $row["fillupseat"]; ?></td>
                    <td><?php echo $row["blankseat"]; ?></td>
                    <td><?php echo $row["startdate"]; ?></td>
                    <td><?php echo $row["enddate"]; ?></td>
                    <td><?php echo $row["admissionFee"]; ?></td>


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

