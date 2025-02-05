<?php require_once("header.php") ?>

<div class="content">
	<div class="container-fluid">
		<div class="row">


			<div class="col-sm-12 paymenttooooop">
				<h1 class="paymentconfirm">Role Management</h1>
				<span class="paymentmenu">
					<a href="htmlAddRole.php" title="addrole" class="btn btn-info">Add New Role</a>
					<a href="htmlAALLlisTRole.php" title="allrole" class="btn btn-info">All Role</a>
				</span>
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
									<th>User Email</th>
									<th>User Role</th>
<!--                           <th>EDIT</th>
	<th>DELET</th> -->
</tr>
</thead>



<?php
$sqlselect = "SELECT 
id,
CemailA,
UserType
-- AmountT, 
-- DateT

FROM 
tableforcreateaccount";

$result = $universityDBconnect -> query($sqlselect) ;

if ($result -> num_rows) {
	while ($row=$result -> fetch_assoc()) {

		?>

		<tr>

			<td> <?php echo $row["CemailA"]; ?> </td>


			<?php 
			if ($row["UserType"]==0) {
				?>
				<td><?php echo 'Member'; ?></td>
				<?php  
			} ;

			if ($row["UserType"]==1) {
				?>
				<td><?php echo 'Administrator'; ?></td>
				<?php 
			} ;

			if ($row["UserType"]==2) {
				?>
				<td><?php echo 'Editor'; ?></td>
				<?php
			} ;

			if ($row["UserType"]==3) {
				?>
				<td><?php echo 'Contributor'; ?></td>
				<?php
			} ;

			?>




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