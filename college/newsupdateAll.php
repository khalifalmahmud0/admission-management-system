<?php require_once("header.php") ?>

<div class="content">
  <div class="container-fluid">
    <div class="row">


      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Payment Activities Of <small>Users</small></h2>
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
                  <th>No</th>
                  <th>News</th>
                </tr>
              </thead>



              <?php

              $sqlselect = "SELECT 
              id,
              news
              FROM 
              updatelatestnews";

              $result = $universityDBconnect -> query($sqlselect) ;

              if ($result -> num_rows) {
                while ($row=$result -> fetch_assoc()) {

                  ?>

                  <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["news"]; ?></td>
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