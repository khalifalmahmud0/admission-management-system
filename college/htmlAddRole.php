<?php require_once("header.php") ; ?>
<div class="col-sm-12 paymenttooooop">
	<h1 class="paymentconfirm">Role Management</h1>
	<span class="paymentmenu">
		<a href="htmlAddRole.php" title="addrole" class="btn btn-info">Add New Role</a>
		<a href="htmlAALLlisTRole.php" title="allrole" class="btn btn-info">All Role</a>
	</span>
</div>
<form action="role.php" method="POST" accept-charset="utf-8">

	<div class="content ">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">

					<div class="panel panel-default">
						<div class="panel-body form-horizontal payment-form paymentpadding">


							<div class="input-group">
								<span class="input-group-addon">New Role User Email</span>

								<input type="text" class="form-control" id="description" name="roleemail" required="">

							</div>
							<div class="input-group">
								<span class="input-group-addon">New Role User Role</span>
								<select class="form-control" name="roleroleTYPE" required="" >
									<option value="" class="form-control" >---Select Role---</option>
									<option value="0" class="form-control">Member</option>
									<option value="1" class="form-control">Administrator</option>
									<option value="2" class="form-control">Editor</option>
									<option value="3" class="form-control">Contributor</option>
								</select>
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