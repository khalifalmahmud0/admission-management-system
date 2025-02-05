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
									<th>Student Name</th>
									<th>Payment Type</th>
									<th>Dep.</th>
									<th>Amount(tk)</th>
									<th>Date</th>
									<th>Cash recept.No</th>
									<th>Sender mobile Number</th>
									<th>Merchant mobile Number</th>
									<th>Counter No</th>
									<th>TrxiD</th>
									<th>varification</th>
									<th>Status</th>
									<th>Referance</th>
								</tr>
							</thead>



							<?php
							$sqlselect = "SELECT 
							id,
							name, 
							paymentTypeT, 
							department, 
							AmountT, 
							DateT,
							CashReceptNumberT,
							SenderNumberT,
							MerchantNumberT,
							CounterNumberT,
							TrxidT,
							varification,
							statusT,
							ReferanceT
							FROM 
							paymenttable";

							$result = $universityDBconnect -> query($sqlselect) ;

							if ($result -> num_rows) {
								while ($row=$result -> fetch_assoc()) {

									?>

									<tr>
										<td> <?php echo $row["name"]; ?> </td>
										<td><?php echo $row["paymentTypeT"]; ?></td>
										<td><?php echo $row["department"]; ?></td>
										<td><?php echo $row["AmountT"]; ?></td>
										<td><?php echo $row["DateT"]; ?></td>
										<td><?php echo $row["CashReceptNumberT"]; ?></td>
										<td><?php echo $row["SenderNumberT"]; ?></td>
										<td><?php echo $row["MerchantNumberT"]; ?></td>
										<td><?php echo $row["CounterNumberT"]; ?></td>
										<td><?php echo $row["TrxidT"]; ?></td>

										<?php
										if($row["varification"]==0){
											$verify='<form action="pay_verified.php"  method="post">
											<input type="hidden"  value="'.$row["id"].'" name="kkkkname">
											<button type="submit" class="btn btn-success">Verify</button>
											</form>';
										}else{
											$verify="verified";
										}
										?>
										<td><?php echo $verify;?></td>

										<td><?php echo $row["statusT"]; ?></td>
										<td><?php echo $row["ReferanceT"]; ?></td>
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