<?php require_once("header.php") ; ?>
<div class="col-sm-12 paymenttooooop">
    <h1 class="paymentconfirm">Update Role Management</h1>
</div>
<form action="paymentDB.php" method="post" accept-charset="utf-8">
    <div class="content ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <span>
                        <img src="<?php echo $_SESSION["user_image"]; ?>" alt="Role" height="90" width="90" class="payementimage">
                        <h4 class="payementtype"><?php echo $_SESSION["user_name"] ; ?></h4> 
                    </span>
                    <div class="panel panel-default">
                        <div class="panel-body form-horizontal payment-form paymentpadding">

                            <div class="form-group">
                                <label for="description" class="col-sm-3 control-label">Update User Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="description" name="namepaymenter">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-sm-3 control-label">Update User Default Role</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="status" name="paymenttypee">
                                        <option>Subscriber</option>
                                        <option>Contributor</option>
                                        <option>Author</option>
                                        <option>Editor</option>
                                        <option>Administrator</option>
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