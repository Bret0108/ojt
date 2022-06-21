<?PHP
session_start();
//Update June 12 2022 Created Form viewer for repair and evaluation forms//
//Updated June 15 2022 Added Equipment Repair Request form viewer//
include('../Connection/Connection.php');

if(isset($_POST['check'])){

	$Choice1 = $_POST['Naamee'];
	$Choice4 = $_POST['pili1'];
	$Choice2 = $_POST['pili2'];
	$Choice3 = $_POST['pili3'];
	$Choice5 = $_POST['Vid'];
	$Choice6 = $_POST['pili6'];

	$_SESSION['choice1'] = $Choice1;
	$_SESSION['choice2'] = $Choice2;
	$_SESSION['choice3'] = $Choice3;
	$_SESSION['choice4'] = $Choice4;
	$_SESSION['choice5'] = $Choice5;
	$_SESSION['choice6'] = $Choice6;

	function goback(){
		header('location: Forms_list.php');
	}


	if($Choice4 == "instructional"){


		$qrY= "SELECT * FROM instructionalvideoeval WHERE `Evaluator Name` LIKE '%$Choice1%' AND `Video Title` LIKE '$Choice5' AND monthname(`daTE`)='$Choice2' AND year(`daTE`) = '$Choice3'";
			$ruN = mysqli_query($con, $qrY);
		
			if(mysqli_num_rows($ruN) > 0){
				foreach($ruN as $roW){

				?>
					<h3 id = "view" class="label_Confirm">Instructional Video Evaluation Form</h3>
					 <div class="rows" style="margin-bottom: 10px;">
			            <form action="Forms_print.php" method="POST">
			            <button type="submit" name="export_excel" class="btn btn-success">Print</button>
			            </form>
			        </div>
					<div class="table-responsive">
                  <table class = "table table-bordered" >
                      <thead>
                        <tr>
                        	<th class="tHead">Eval_ID</th>
                            <th class="tHead">Video Title</th>
                            <th class="tHead">Evaluator Name</th>
                            <th class="tHead">Evaluator Signature</th>
                            <th class="tHead">Date</th>
                            <th class="tHead">Question1</th>
                            <th class="tHead">Question2</th>
                            <th class="tHead">Question3</th>
                            <th class="tHead">Question4</th>
                            <th class="tHead">Question5</th>
                            <th class="tHead">Question6</th>
                            <th class="tHead">Question7</th>
                            <th class="tHead">Question8</th>
                            <th class="tHead">Question9</th>
                            <th class="tHead">Question10</th>
                            <th class="tHead">Additional Comments</th>
                            <th class="tHead">Rating</th>
                            <th class="tHead">Verbal Interpretation</th>
                            <th class="tHead">Recommendation</th>
                        <tbody>
			                  	<tr>
			                  		<td><?= $roW['Eval_ID'];?></td>
									<td><?= $roW['Video Title'];?></td>
									<td><?= $roW['Evaluator Name'];?></td>
									<td><div style="width: 100px;"><img style="width: 100px;" src="../upload/<?php echo $roW['Evaluator Signature']; ?>"></div></td>
									<td><?= $roW['daTE'];?></td>
									<td><?= $roW['Question1'];?></td>
									<td><?= $roW['Question2'];?></td>
									<td><?= $roW['Question3'];?></td>
									<td><?= $roW['Question4'];?></td>
									<td><?= $roW['Question5'];?></td>
									<td><?= $roW['Question6'];?></td>
									<td><?= $roW['Question7'];?></td>
									<td><?= $roW['Question8'];?></td>
									<td><?= $roW['Question9'];?></td>
									<td><?= $roW['Question10'];?></td>
									<td><?= $roW['Additional Comments'];?></td>
									<td><?= $roW['Rating'];?></td>
									<td><?= $roW['Verbal Interpretation'];?></td>
									<td><?= $roW['Recommendation'];?></td>
								</tr>
								 </tbody>
                        </tr>
                      </thead>
                  </table>
              </div>  
				<?php
				}
			}
	}
	else if($Choice4 == "Repair"){

		$qrY= "SELECT * FROM equipmentrepairrequest WHERE `ReportName` LIKE '%$Choice1%' AND monthname(`MDate`) = '$Choice2' AND year(`MDate`) = '$Choice3'";
			$ruN = mysqli_query($con, $qrY);
		
		if($Choice6 == "In-house"){

			if(mysqli_num_rows($ruN) > 0){
				foreach($ruN as $roW){

				?>
					<h3 id = "view" class="label_Confirm">Equipment Repair Request Form</h3>
					<div class="rows" style="margin-bottom: 10px;">
			            <form action="Forms_printERRF.php" method="POST">
			            <button type="submit" name="ERRF" class="btn btn-success">Print</button>
			            </form>
			        </div>

					<div class="table-responsive">
                  <table class = "table table-bordered" >
                      <thead>
                        <tr>
                        	<th class="tHead">Repair_ID</th>
                            <th class="tHead">Building</th>
                            <th class="tHead">Room</th>
                            <th class="tHead">Date</th>
                            <th class="tHead">Equipment</th>
                            <th class="tHead">Model</th>
                            <th class="tHead">Serial No</th>
                            <th class="tHead">Equipment No</th>
                            <th class="tHead">Complaint</th>
                            <th class="tHead">Report Name</th>
                            <th class="tHead">Report Department</th>
                            <th class="tHead">Action Taken</th>
                            <th class="tHead">Repaired</th>
                            <th class="tHead">In-House Remarks</th>
                            <th class="tHead">In-House Name</th>
                            <th class="tHead">In-House Signature</th>
                            <th class="tHead">In-House Date/Time</th>
                            <th class="tHead">Attest Name</th>
                            <th class="tHead">Attest Signature</th>
                             <th class="tHead">Attest Date/Time</th>
                              <th class="tHead">Approve Name</th>
                               <th class="tHead">Approve Signature</th>
                        <tbody>

					
			                  	<tr>
			                  		<td><?= $roW['Repair_ID'];?></td>
									<td><?= $roW['BuildiNG'];?></td>
									<td><?= $roW['ROoM'];?></td>
									<td><?= $roW['MDate'];?></td>
									<td><?= $roW['DescEquip'];?></td>
									<td><?= $roW['Model'];?></td>
									<td><?= $roW['SerialNo'];?></td>
									<td><?= $roW['DescEquipNo'];?></td>
									<td><?= $roW['Complaint'];?></td>
									<td><?= $roW['ReportName'];?></td>
									<td><?= $roW['ReportDept'];?></td>
									<td><?= $roW['ActionTaken'];?></td>
									<td><?= $roW['Repaired'];?></td>
									<td><?= $roW['InhouseRemarks'];?></td>
									<td><?= $roW['InhouseName'];?></td>
									<td><div style="width: 100px;"><img style="width: 100px;" src="../upload/<?php echo $roW['InhouseSig']; ?>"></div></td>
									<td><?= $roW['InhouseDateTime'];?></td>
									<td><?= $roW['AttestName'];?></td>
									<td><div style="width: 100px;"><img style="width: 100px;" src="../upload/<?php echo $roW['AttestSig']; ?>"></div></td>
									<td><?= $roW['AttestDateTime'];?></td>
									<td><?= $roW['ApprovName'];?></td>
									<td><div style="width: 100px;"><img style="width: 100px;" src="../upload/<?php echo $roW['ApprovSig']; ?>"></div></td>
								</tr>
				<?php
				}
			}
		}
		else if($Choice6 == "Outside"){

			if(mysqli_num_rows($ruN) > 0){
				foreach($ruN as $roW){

				?>
					<h3 id = "view" class="label_Confirm">Equipment Repair Request Form</h3>
					<div class="rows" style="margin-bottom: 10px;">
			            <form action="Forms_printERRF.php" method="POST">
			            <button type="submit" name="ERRF" class="btn btn-success">Print</button>
			            </form>
			        </div>
					<div class="table-responsive">
                  <table class = "table table-bordered" >
                      <thead>
                        <tr>
                        	<th class="tHead">Repair_ID</th>
                            <th class="tHead">Building</th>
                            <th class="tHead">Room</th>
                            <th class="tHead">Date</th>
                            <th class="tHead">Equipment</th>
                            <th class="tHead">Model</th>
                            <th class="tHead">Serial No</th>
                            <th class="tHead">Equipment No</th>
                            <th class="tHead">Complaint</th>
                            <th class="tHead">Report Name</th>
                            <th class="tHead">Report Department</th>
                            <th class="tHead">Action Taken</th>
                            <th class="tHead">Outside Name</th>
                            <th class="tHead">Outside Service center</th>
                            <th class="tHead">Date Pullout</th>
                            <th class="tHead">Date Return</th>
                            <th class="tHead">OR No</th>
                            <th class="tHead">Attest Name</th>
                            <th class="tHead">Attest Signature</th>
                             <th class="tHead">Attest Date/Time</th>
                              <th class="tHead">Approve Name</th>
                               <th class="tHead">Approve Signature</th>
                        <tbody>

					
			                  	<tr>
			                  		<td><?= $roW['Repair_ID'];?></td>
									<td><?= $roW['BuildiNG'];?></td>
									<td><?= $roW['ROoM'];?></td>
									<td><?= $roW['MDate'];?></td>
									<td><?= $roW['DescEquip'];?></td>
									<td><?= $roW['Model'];?></td>
									<td><?= $roW['SerialNo'];?></td>
									<td><?= $roW['DescEquipNo'];?></td>
									<td><?= $roW['Complaint'];?></td>
									<td><?= $roW['ReportName'];?></td>
									<td><?= $roW['ReportDept'];?></td>
									<td><?= $roW['ActionTaken'];?></td>
									<td><?= $roW['OutsideName'];?></td>
									<td><?= $roW['OutsideServicecntr'];?></td>
									<td><?= $roW['OutsideDateout'];?></td>
									<td><?= $roW['OutsideReturn'];?></td>
									<td><?= $roW['OutsideORno'];?></td>
									<td><?= $roW['AttestName'];?></td>
									<td><div style="width: 100px;"><img style="width: 100px;" src="../upload/<?php echo $roW['AttestSig']; ?>"></div></td>
									<td><?= $roW['AttestDateTime'];?></td>
									<td><?= $roW['ApprovName'];?></td>
									<td><div style="width: 100px;"><img style="width: 100px;" src="../upload/<?php echo $roW['ApprovSig']; ?>"></div></td>
								</tr>
				<?php
				}
			}	
		}
	}
	
}

?>