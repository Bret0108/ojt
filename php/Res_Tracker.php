<?php
error_reporting(0); //comment this to see warnings and notice

include('Connection/Connection.php');

if(isset($_GET['sub']))  
{
	$track_id=$_GET['Res_id'];


		$qry= "SELECT reservation.`Res_id`,reservation.`nature`,reservation.`Purpose`,reservation.`Equipment`, tbl_equipment.`type`,reservation.`resDate`,reservation.`Time_Start`,reservation.`Time_End`,reservation.`Room_Venue`,reservation.`ReqName`,reservation.`School`,reservation.`Email`,reservation.`Status`,reservation.`Campus`
			FROM reservation
			INNER JOIN tbl_equipment ON reservation.`Equipment` = tbl_equipment.`Equip_ID` WHERE `Res_id` = $track_id limit 1 ";
		$run = mysqli_query($con, $qry);

			if(mysqli_num_rows($run) > 0){
				foreach($run as $row){

					?>
						<tr>
							<td class="Tracking"><?= $row['Res_id'];?></td>
							<td><?= $row['ReqName'];?></td>
							<td><?= $row['School'];?></td>
							<td><?= $row['Email'];?></td>
							<td><?= $row['Room_Venue'];?></td>
							<td><?= $row['nature'];?></td>
							<td><?= $row['Purpose'];?></td>
							<td><?= $row['Equipment'];?></td>
							<td><?= $row['type'];?></td>
							<td><?= $row['resDate'];?></td>
							<td><?= $row['Time_Start'];?></td>
							<td><?= $row['Time_End'];?></td>
							<td><?= $row['Status'];?></td>
							<td><?= $row['Campus'];?></td>
						</tr>
					<?php
					
				}




			}
			else{
					
			}

			$qry1= "SELECT reservationfacility.`Res_id`,reservationfacility.`nature`,reservationfacility.`Purpose`,reservationfacility.`Facility`, tbl_facilities.`type`,reservationfacility.`resDate`,reservationfacility.`Time_Start`,reservationfacility.`Time_End`,reservationfacility.`ReqName`,reservationfacility.`School`,reservationfacility.`Email`,reservationfacility.`Status`,reservationfacility.`Campus`
				FROM reservationfacility
				INNER JOIN tbl_facilities ON reservationfacility.`Facility` = tbl_facilities.`Faci_ID` WHERE `Res_id` = $track_id limit 1";
				$run1 = mysqli_query($con, $qry1);

			if(mysqli_num_rows($run1) > 0){
				foreach($run1 as $row1){

					?>
						<tr>
							<td class="Tracking"><?= $row1['Res_id'];?></td>
							<td><?= $row1['ReqName'];?></td>
							<td><?= $row1['School'];?></td>
							<td><?= $row1['Email'];?></td>
							<td><?= $row1['Room_Venue'];?></td>
							<td><?= $row1['nature'];?></td>
							<td><?= $row1['Purpose'];?></td>
							<td><?= $row1['Facility'];?></td>
							<td><?= $row1['type'];?></td>
							<td><?= $row1['resDate'];?></td>
							<td><?= $row1['Time_Start'];?></td>
							<td><?= $row1['Time_End'];?></td>
							<td><?= $row1['Status'];?></td>
							<td><?= $row1['Campus'];?></td>
						</tr>
					<?php
					
				}




			}
			else{
				
			}
}

?>