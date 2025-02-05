<?php require_once("header.php") ; ?>
<div class="col-sm-12 paymenttooooop">
  <h1 class="paymentconfirm">Update Site Introduction</h1>
</div>




<form action="updateIntroDuctiobDB.php" method="post" accept-charset="utf-8">

 <div class="content ">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">

        <div class="panel panel-default">
          <div class="panel-body form-horizontal payment-form paymentpadding">

           <div class="form-group">
            <label for="description" class="col-sm-3 control-label">Update Site Introduction</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="description" name="UpdateIntro">
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