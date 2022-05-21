<?php
include('../Connection/Connection.php');

$qry= "SELECT reservation.`Res_id`,reservation.`nature`,reservation.`Purpose`,reservation.`Equipment`, tbl_equipment.`type`,reservation.`resDate`,reservation.`Time_Start`,reservation.`Time_End`,reservation.`Room_Venue`,reservation.`ReqName`,reservation.`School`,reservation.`Email`,reservation.`Status`,reservation.`Campus`
			FROM reservation
			INNER JOIN tbl_equipment ON reservation.`Equipment` = tbl_equipment.`Equip_ID` ORDER BY Res_id DESC LIMIT 1";
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
					<td><?= $row['Campus'];?></td>
				</tr>
			<?php
			
		}




	}
	else{
			echo "no Data";
	}


?>