<?PHP
include('../Connection/Connection.php');

if(isset($_POST['check'])){
	$Choice = $_POST['pili'];
	$Choice1 = $_POST['pili1'];

	if($Choice == 'COMPLETE' AND $Choice1 == 'Equipment'){
		$qry= "SELECT * FROM `reservation` WHERE `Status` = 'COMPLETED' ORDER BY `Res_id` DESC";
		$run = mysqli_query($con, $qry);
		
		if(mysqli_num_rows($run) > 0){
			foreach($run as $row){

				?>
					<tr>
						<td><?= $row['Status'];?></td>
						<td><?= $row['resDate'];?></td>
						<td><?= $row['Time_Start'];?></td>
						<td><?= $row['Time_End'];?></td>
						<td class="Tracking"><?= $row['Res_id'];?></td>
						<td><?= $row['ReqName'];?></td>
						<td><?= $row['School'];?></td>
						<td><?= $row['Email'];?></td>
						<td><?= $row['Room_Venue'];?></td>
						<td><?= $row['nature'];?></td>
						<td><?= $row['Purpose'];?></td>
						<td><?= $row['Equipment'];?></td>
						<td><?= $row['Campus'];?></td>
					</tr>
				<?php
			}	
		}
	}
	if($Choice == 'COMPLETE' AND $Choice1 == 'Facility'){
		$qry1= "SELECT * FROM `reservationfacility` WHERE `Status` = 'COMPLETED' ORDER BY `Res_id` DESC";
		$run1 = mysqli_query($con, $qry1);
		
		if(mysqli_num_rows($run1) > 0){
			foreach($run1 as $row1){

				?>
					<tr>
						<td><?= $row1['Status'];?></td>
						<td><?= $row1['resDate'];?></td>
						<td><?= $row1['Time_Start'];?></td>
						<td><?= $row1['Time_End'];?></td>
						<td class="Tracking"><?= $row1['Res_id'];?></td>
						<td><?= $row1['ReqName'];?></td>
						<td><?= $row1['School'];?></td>
						<td><?= $row1['Email'];?></td>
						<td></td>
						<td><?= $row1['nature'];?></td>
						<td><?= $row1['Purpose'];?></td>
						<td><?= $row1['Facility'];?></td>
						<td><?= $row1['Campus'];?></td>
					</tr>
				<?php
			}	
		}
	}

	if($Choice == 'RESERVED' AND $Choice1 == 'Equipment'){
		$qry= "SELECT * FROM `reservation` WHERE `Status` = 'RESERVED' ORDER BY `Res_id` DESC";
		$run = mysqli_query($con, $qry);
		
		if(mysqli_num_rows($run) > 0){
			foreach($run as $row){

				?>
					<tr>
						<td><?= $row['Status'];?></td>
						<td><?= $row['resDate'];?></td>
						<td><?= $row['Time_Start'];?></td>
						<td><?= $row['Time_End'];?></td>
						<td class="Tracking"><?= $row['Res_id'];?></td>
						<td><?= $row['ReqName'];?></td>
						<td><?= $row['School'];?></td>
						<td><?= $row['Email'];?></td>
						<td><?= $row['Room_Venue'];?></td>
						<td><?= $row['nature'];?></td>
						<td><?= $row['Purpose'];?></td>
						<td><?= $row['Equipment'];?></td>
						<td><?= $row['Campus'];?></td>
					</tr>
				<?php
			}	
		}
	}
	if($Choice == 'RESERVED' AND $Choice1 == 'Facility'){
		$qry1= "SELECT * FROM `reservationfacility` WHERE `Status` = 'RESERVED' ORDER BY `Res_id` DESC";
		$run1 = mysqli_query($con, $qry1);
		
		if(mysqli_num_rows($run1) > 0){
			foreach($run1 as $row1){

				?>
					<tr>
						<td><?= $row1['Status'];?></td>
						<td><?= $row1['resDate'];?></td>
						<td><?= $row1['Time_Start'];?></td>
						<td><?= $row1['Time_End'];?></td>
						<td class="Tracking"><?= $row1['Res_id'];?></td>
						<td><?= $row1['ReqName'];?></td>
						<td><?= $row1['School'];?></td>
						<td><?= $row1['Email'];?></td>
						<td></td>
						<td><?= $row1['nature'];?></td>
						<td><?= $row1['Purpose'];?></td>
						<td><?= $row1['Facility'];?></td>
						<td><?= $row1['Campus'];?></td>
					</tr>
				<?php
			}	
		}
	}

	if($Choice == 'CANCELLED' AND $Choice1 == 'Equipment'){
		$qry= "SELECT * FROM `reservation` WHERE `Status` = 'CANCELLED' ORDER BY `Res_id` DESC";
		$run = mysqli_query($con, $qry);
		
		if(mysqli_num_rows($run) > 0){
			foreach($run as $row){

				?>
					<tr>
						<td><?= $row['Status'];?></td>
						<td><?= $row['resDate'];?></td>
						<td><?= $row['Time_Start'];?></td>
						<td><?= $row['Time_End'];?></td>
						<td class="Tracking"><?= $row['Res_id'];?></td>
						<td><?= $row['ReqName'];?></td>
						<td><?= $row['School'];?></td>
						<td><?= $row['Email'];?></td>
						<td><?= $row['Room_Venue'];?></td>
						<td><?= $row['nature'];?></td>
						<td><?= $row['Purpose'];?></td>
						<td><?= $row['Equipment'];?></td>
						<td><?= $row['Campus'];?></td>
					</tr>
				<?php
			}	
		}
	}
	if($Choice == 'CANCELLED' AND $Choice1 == 'Facility'){
		$qry1= "SELECT * FROM `reservationfacility` WHERE `Status` = 'CANCELLED' ORDER BY `Res_id` DESC";
		$run1 = mysqli_query($con, $qry1);
		
		if(mysqli_num_rows($run1) > 0){
			foreach($run1 as $row1){

				?>
					<tr>
						<td><?= $row1['Status'];?></td>
						<td><?= $row1['resDate'];?></td>
						<td><?= $row1['Time_Start'];?></td>
						<td><?= $row1['Time_End'];?></td>
						<td class="Tracking"><?= $row1['Res_id'];?></td>
						<td><?= $row1['ReqName'];?></td>
						<td><?= $row1['School'];?></td>
						<td><?= $row1['Email'];?></td>
						<td></td>
						<td><?= $row1['nature'];?></td>
						<td><?= $row1['Purpose'];?></td>
						<td><?= $row1['Facility'];?></td>
						<td><?= $row1['Campus'];?></td>
					</tr>
				<?php
			}	
		}
	}

	if($Choice == 'PENDING' AND $Choice1 == 'Equipment'){
		$qry= "SELECT * FROM `reservation` WHERE `Status` = 'PENDING' ORDER BY `Res_id` DESC";
		$run = mysqli_query($con, $qry);
		
		if(mysqli_num_rows($run) > 0){
			foreach($run as $row){

				?>
					<tr>
						<td><?= $row['Status'];?></td>
						<td><?= $row['resDate'];?></td>
						<td><?= $row['Time_Start'];?></td>
						<td><?= $row['Time_End'];?></td>
						<td class="Tracking"><?= $row['Res_id'];?></td>
						<td><?= $row['ReqName'];?></td>
						<td><?= $row['School'];?></td>
						<td><?= $row['Email'];?></td>
						<td><?= $row['Room_Venue'];?></td>
						<td><?= $row['nature'];?></td>
						<td><?= $row['Purpose'];?></td>
						<td><?= $row['Equipment'];?></td>
						<td><?= $row['Campus'];?></td>
					</tr>
				<?php
			}	
		}
	}
	if($Choice == 'PENDING' AND $Choice1 == 'Facility'){
		$qry1= "SELECT * FROM `reservationfacility` WHERE `Status` = 'PENDING' ORDER BY `Res_id` DESC";
		$run1 = mysqli_query($con, $qry1);
		
		if(mysqli_num_rows($run1) > 0){
			foreach($run1 as $row1){

				?>
					<tr>
						<td><?= $row1['Status'];?></td>
						<td><?= $row1['resDate'];?></td>
						<td><?= $row1['Time_Start'];?></td>
						<td><?= $row1['Time_End'];?></td>
						<td class="Tracking"><?= $row1['Res_id'];?></td>
						<td><?= $row1['ReqName'];?></td>
						<td><?= $row1['School'];?></td>
						<td><?= $row1['Email'];?></td>
						<td></td>
						<td><?= $row1['nature'];?></td>
						<td><?= $row1['Purpose'];?></td>
						<td><?= $row1['Facility'];?></td>
						<td><?= $row1['Campus'];?></td>
					</tr>
				<?php
			}	
		}
	}

}

?>