<?php require_once("header.php") ; ?>
<div class="col-sm-12 paymenttooooop">
  <h1 class="paymentconfirm">Add New Department</h1>
</div>
<form action="DBaddNewDepartment.php" method="post" accept-charset="utf-8">

  <div class="content ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default">
            <div class="panel-body form-horizontal payment-form paymentpadding">

              <div class="form-group">
                <label for="description" class="col-sm-3 control-label">New Department</label>
                <div class="col-sm-9">
                  <input required="" type="text" class="form-control" id="description" name="ddname">
                </div>
              </div>

              <div class="form-group">
                <label for="description" class="col-sm-3 control-label">Total seat</label>
                <div class="col-sm-9">
                  <input required="" type="text" class="form-control" id="description" name="ddtotalseat">
                </div>
              </div>


              <div class="form-group">
                <label for="description" class="col-sm-3 control-label">Admission Strat Time</label>
                <div class="col-sm-9">
                  <input required="" type="date" class="form-control" id="description" name="AdmissionStratTime">
                </div>
              </div>


              <div class="form-group">
                <label for="description" class="col-sm-3 control-label">Admission End Time</label>
                <div class="col-sm-9">
                  <input required="" type="date" class="form-control" id="description" name="AdmissionEndTime">
                </div>
              </div>


              <div class="form-group">
                <label for="description" class="col-sm-3 control-label">Admission fee</label>
                <div class="col-sm-9">
                  <input required="" type="text" class="form-control" id="description" name="Admissionfee">
                </div>
              </div>

              <div class="form-group">
                <label for="description" class="col-sm-3 control-label">Admission Exam Date</label>
                <div class="col-sm-9">
                  <input required="" type="date" class="form-control" id="AdmissionExamDate" name="AdmissionExamDate">
                </div>
              </div> 

              <div class="form-group">
                <label for="description" class="col-sm-3 control-label">Admission Exam Time</label>
                <div class="col-sm-9">
                  <input required="" type="text" class="form-control" id="Admissionrexamtime" name="Admissionrexamtime">
                </div>
              </div>

              <div class="form-group">
                <label for="description" class="col-sm-3 control-label">Admission Result Date</label>
                <div class="col-sm-9">
                  <input required="" type="date" class="form-control" id="AdmissionResultDate" name="AdmissionResultDate">
                </div>
              </div>


              <div class="form-group">
                <div class="col-sm-12 text-right">
                  <button type="reset" class="btn btn-danger">Reset</button>
                  <button type="submit" class="btn btn-success">(+)Add</button>
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