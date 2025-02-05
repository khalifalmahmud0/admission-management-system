<?php require_once("header.php") ; ?>
<div class="col-sm-12 paymenttooooop">
    <h1 class="paymentconfirm">Confirm Your Payment First</h1>
    <span class="paymentmenu">
        <a href="htmlpaymentCash.php" title="ByCash" class="btn btn-info">By Cash</a>
        <a href="htmlpaymentBcash.php" title="ByCash" class="btn btn-info">By Bkash</a>
        <a href="htmlpaymentDuchBangla.php" title="ByDutchBanglaMobileBanking" class="btn btn-info">By Dutch-Bangla Mobile Banking</a>
    </span>
</div>




<form action="paymentDB.php" method="post" accept-charset="utf-8">

    <div class="content ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <span>
                        <img src="image/bkashDuchbanglaCashLOGO/bkash_logo.png" alt="bkash" height="90" width="90" class="payementimage">
                        <h4 class="payementtype">Bkash</h4> 
                    </span>


                    <div class="panel panel-default">
                        <div class="panel-body form-horizontal payment-form paymentpadding">

                            <div class="form-group">
                                <label for="description" class="col-sm-3 control-label">Name</label>
                                <div class="col-sm-9">
                                    <input required type="text" class="form-control" id="description" name="namepaymenter" value="<?php echo $_SESSION["user_name"]; ?>">
                                </div>
                            </div>



<!-- //department -->


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


              <!-- money  -->

            <div class="form-group">
                <label for="description" class="col-sm-3 control-label">Amount</label>
                <div class="col-sm-9">
                  <!-- <input required type="text" class="form-control" id="description" name="namepaymenter"> -->
                  <!-- <p class="form-control" id="status" disabled name="amountamount"></p> -->

                  <input type="text" class="form-control" name="amountamount" id="status"  value="">
                </div>
              </div>


              <!-- //scripts -->

              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Ajax script -->
<script type="text/javascript">
  $(document).ready(function (){
    $('#department').on('change', function (){
      var selectedValue = $('#department').val();
      $.ajax({
        url: 'departmentAmount.php',
        type: 'POST',
        data: 'name=' + selectedValue,
        success: function(response){
          document.getElementById("status").value=response; 
        }
      });

    });
  });
</script>

              <!-- //department end  -->




                            <div class="form-group">
                                <label for="status" class="col-sm-3 control-label">Payment System</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="status" name="paymenttypee">
                                        <option>Bkash</option>
                                    </select>
                                </div>
                            </div> 





                            <div class="form-group">
                                <label for="concept" class="col-sm-3 control-label">Enter Sender mobile Number </label>
                                <div class="col-sm-9">
                                    <input required type="text" class="form-control" id="concept" name="SendermobileNumber">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="concept" class="col-sm-3 control-label">Enter Merchant mobile Number </label>
                                <div class="col-sm-9">
                                    <input required type="text" class="form-control" id="concept" name="MerchantmobileNumber">
                                </div>
                            </div>





                            <input required type="hidden" class="form-control" id="amount" name="amountamount1" value="<?php echo $_SESSION["user_id"]; ?>">

                            <div class="form-group">
                                <label for="date" class="col-sm-3 control-label">Date</label>
                                <div class="col-sm-9">
                                    <input required type="text" class="form-control" id="date" name="datedate" value=" <?php echo date("Y/m/d"); ?> ">
                                </div>
                            </div>  

                            <div class="form-group">
                                <label for="concept" class="col-sm-3 control-label">Enter Referance</label>
                                <div class="col-sm-9">
                                    <input required type="text" class="form-control" id="concept" name="Referance">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="concept" class="col-sm-3 control-label">Enter Counter No</label>
                                <div class="col-sm-9">
                                    <input required type="text" class="form-control" id="concept" name="CounterNo">
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="concept" class="col-sm-3 control-label">Enter TrxiD</label>
                                <div class="col-sm-9">
                                    <input required type="text" class="form-control" id="concept" name="TrxiD">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="status" class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-9">
                                    <select required="" class="form-control" id="status" name="statuselect">
                                        <option>Already Paid</option>
                                        <option>Will Paid After This Step complete</option>
                                    </select>
                                </div>
                            </div>  




                            <div class="form-group">
                                <div class="col-sm-12 text-right">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>            
                </div> <!-- / panel preview -->
            </div>
        </div>
    </div>
</form>

<?php require_once("footer.php") ; ?>