<?php require_once("header.php") ;?>
<style type="text/css">
h4{
	font-family: none;
	color: black;
	text-transform: capitalize;
}
	.sty{
		
	border: 2px dotted black;
	margin: 1px 50px !important;
	padding: 10px !important;
}
.imerg {
height: 190px !important;
	width: 190px !important;
	margin-top: 35px;
	margin-left: 30px;
	padding: 5px !important;
	border: 1px solid black;
}
.imergsig {
	padding-top: 15px;
	width: 250px !important;
	height: 70px !important;
}

.hrhr {
    border: .5px solid black;
}
.printbutton{

}
</style>
<!-- For Student  -->
<div class="row sty">
	<u><h3 align="center">Student Part</h3></u>
	<div class="col-sm-4 ">
		<?php
		$myid = $_SESSION["user_id"];
		$sqlA = "SELECT * FROM studentinformation WHERE hiddennumber =$myid ";
		$resultA = mysqli_query($universityDBconnect, $sqlA);
		if (mysqli_num_rows($resultA) > 0) {
			while($row = mysqli_fetch_assoc($resultA)) {
				$admit_s_name = $row["Student_Account_Name"];
				$admit_s_fname = $row["FatherNameI"];
				$admit_s_mname = $row["MotherNameI"];
				$admit_s_bday = $row["DateOfBirthI"];
				$admit_s_pimage = $row["PersonalImageI"];
				$admit_s_signature = $row["StudentSignatureI"];
				$admit_s_depchoice = $row["Student_Choice_department"];
		
			}
		};
		?>
		<!-- for image edit end -->
		<img class="imerg" src="<?php echo $admit_s_pimage; ?>" alt="user_image"/>
	</div>
	<div class="col-sm-8">
		<h4>Student Name : <?php echo $admit_s_name ;?></h4>
		<h4>Father Name : <?php echo $admit_s_fname ;?></h4>
		<h4>Mother Name : <?php echo $admit_s_mname ;?></h4>
		<h4>Birth Of Date : <?php echo $admit_s_bday; ?></h4>
		<?php
		$myid = $_SESSION["user_id"];
		$sqlA = "SELECT * FROM departmenttable WHERE DEPname ='$admit_s_depchoice' ";
		$resultA = mysqli_query($universityDBconnect, $sqlA);
		if (mysqli_num_rows($resultA) > 0) {
			while($row = mysqli_fetch_assoc($resultA)) {
				$admit_s_AdmissionExamDate = $row["AdmissionExamDate"];
				$admit_s_Admissionrexamtime = $row["Admissionrexamtime"];
				$admit_s_AdmissionResultDate = $row["AdmissionResultDate"];
		
			}
		};
		?>
		<h4>Roll Number :789<?php echo $myid ?></h4>
		<h4>Exam Time :  <?php echo $admit_s_Admissionrexamtime;  ?></h4>
		<h4>Exam Date : <?php echo $admit_s_AdmissionExamDate; ?></h4>
		<h4>Result Date : <?php echo $admit_s_AdmissionResultDate; ?></h4>
	</div>
	<div class="col-sm-12">
		<div class="col-sm-4">
			<img class="imerg3 imergsig" src="<?php echo $admit_s_signature; ?>" alt="user_image"/>
			<p class="sigtext">student signature</p>
		</div>
		<div class="col-sm-8">
			<?php
			
			$sqlAss = "SELECT * FROM authoritysignaturetable ";
			$resultA = mysqli_query($universityDBconnect, $sqlAss);
			if (mysqli_num_rows($resultA) > 0) {
				while($row = mysqli_fetch_assoc($resultA)) {
					$imageEdit = $row["authoritysignature"];
				}
			};
			?>
			<!-- for image edit end -->
			<img class="imergs imergsig" src="<?php echo $imageEdit; ?>" alt="sig_image"/>
			<p class="sigtext">Authority signature</p>
		</div>
	</div>
	</div>



<!-- For Teacher  -->
<div class="row sty">
	<u><h3 align="center">Authority Part</h3></u>
	<div class="col-sm-4 ">
		<?php
		$myid = $_SESSION["user_id"];
		$sqlA = "SELECT * FROM studentinformation WHERE hiddennumber =$myid ";
		$resultA = mysqli_query($universityDBconnect, $sqlA);
		if (mysqli_num_rows($resultA) > 0) {
			while($row = mysqli_fetch_assoc($resultA)) {
				$admit_s_name = $row["Student_Account_Name"];
				$admit_s_fname = $row["FatherNameI"];
				$admit_s_mname = $row["MotherNameI"];
				$admit_s_bday = $row["DateOfBirthI"];
				$admit_s_pimage = $row["PersonalImageI"];
				$admit_s_signature = $row["StudentSignatureI"];
				$admit_s_depchoice = $row["Student_Choice_department"];
		
			}
		};
		?>
		<!-- for image edit end -->
		<img class="imerg" src="<?php echo $admit_s_pimage; ?>" alt="user_image"/>
	</div>
	<div class="col-sm-8">
		<h4>Student Name : <?php echo $admit_s_name ;?></h4>
		<h4>Father Name : <?php echo $admit_s_fname ;?></h4>
		<h4>Mother Name : <?php echo $admit_s_mname ;?></h4>
		<h4>Birth Of Date : <?php echo $admit_s_bday; ?></h4>
		<?php
		$myid = $_SESSION["user_id"];
		$sqlA = "SELECT * FROM departmenttable WHERE DEPname ='$admit_s_depchoice' ";
		$resultA = mysqli_query($universityDBconnect, $sqlA);
		if (mysqli_num_rows($resultA) > 0) {
			while($row = mysqli_fetch_assoc($resultA)) {
				$admit_s_AdmissionExamDate = $row["AdmissionExamDate"];
				$admit_s_Admissionrexamtime = $row["Admissionrexamtime"];
				$admit_s_AdmissionResultDate = $row["AdmissionResultDate"];
		
			}
		};
		?>
		<h4>Roll Number :789<?php echo $myid ?></h4>
		<h4>Exam Time :  <?php echo $admit_s_Admissionrexamtime;  ?></h4>
		<h4>Exam Date : <?php echo $admit_s_AdmissionExamDate; ?></h4>
		<h4>Result Date : <?php echo $admit_s_AdmissionResultDate; ?></h4>
	</div>
	<div class="col-sm-12">
		<div class="col-sm-4">
			<img class="imerg3 imergsig" src="<?php echo $admit_s_signature; ?>" alt="user_image"/>
			<p class="sigtext">student signature</p>
		</div>
		<div class="col-sm-8">
			<?php
			
			$sqlAss = "SELECT * FROM authoritysignaturetable ";
			$resultA = mysqli_query($universityDBconnect, $sqlAss);
			if (mysqli_num_rows($resultA) > 0) {
				while($row = mysqli_fetch_assoc($resultA)) {
					$imageEdit = $row["authoritysignature"];
				}
			};
			?>
			<!-- for image edit end -->
			<img class="imergs imergsig" src="<?php echo $imageEdit; ?>" alt="sig_image"/>
			<p class="sigtext">Authority signature</p>
		</div>
	</div>
</div>

<input type="button" onclick="window.print()" class="printbutton" value="Print" align="center" >

<?php require_once("footer.php"); ?>