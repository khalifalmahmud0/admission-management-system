
<?php require_once("header.php") ; ?>

<div class="col-sm-12 paymenttooooop">
  <h1 class="paymentconfirm">Admission</h1>
</div>

<form action="regestrationPageOneDBCopy.php" method="post" accept-charset="utf-8">

  <div class="content ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <input required type="hidden" name="hiddentype" value="<?php echo $_SESSION["user_id"]; ?>">
          <div class="panel panel-default">
            <div class="panel-body form-horizontal payment-form paymentpadding">

              <div class="form-group">
                <label for="description" class="col-sm-3 control-label">Student Name</label>
                <div class="col-sm-9" disabled>
                  <input required type="text" value="<?php echo $_SESSION["user_name"]; ?>" class="form-control" id="description" name="nameaccounter">
                </div>
              </div>   

              <div class="form-group">
                <label for="status" class="col-sm-3 control-label">Choice your department</label>
                <div class="col-sm-9">

                  <select class="form-control" id="department" name="departmentchoice" required="">
                    <option value="" class="form-control" >---Select your Department---</option>
                    <?php 
                    $sql = "SELECT 
                    id,
                    DEPname
                    FROM departmenttable";
                    $result = mysqli_query($universityDBconnect, $sql);

                    if (mysqli_num_rows($result) > 0) {
// output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                        ?>

                        <option value="<?php echo $row["DEPname"]; ?>"><?php echo $row["DEPname"]; ?></option>
                        <?php  
                      }
                    } else {
                      echo "0 results";
                    }

                    echo "<hr/>";
                    ?>

                  </select>
                </div>
              </div> 
              <div class="form-group">
                <label for="description" class="col-sm-3 control-label">Available seat</label>
                <div class="col-sm-9">
                  <!-- <input required type="text" class="form-control" id="description" name="namepaymenter"> -->
                  <p class="form-control" id="status" disabled></p>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12 text-right">
                  <button type="reset" class="btn btn-danger">Reset</button>
                  <button type="submit" class="btn btn-success">Next</button>
                </div>
              </div>
            </div>
          </div>            
        </div> <!-- / panel preview -->
      </div>
    </div>
  </div>
</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Ajax script -->
<script type="text/javascript">
  $(document).ready(function (){
    $('#department').on('change', function (){
      var selectedValue = $('#department').val();
      $.ajax({
        url: 'avaiabaleseat.php',
        type: 'POST',
        data: 'name=' + selectedValue,
        success: function(response){
          document.getElementById("status").innerHTML=response; 
        }
      });

    });
  });
</script>

<?php require_once("footer.php") ; ?>