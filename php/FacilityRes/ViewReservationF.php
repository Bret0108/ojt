<?php

include('Connection/Connection.php');

$qry= "SELECT reservationfacility.`Res_id`,reservationfacility.`nature`,reservationfacility.`Purpose`,reservationfacility.`Facility`, tbl_facilities.`type`,reservationfacility.`resDate`,reservationfacility.`Time_Start`,reservationfacility.`Time_End`,reservationfacility.`ReqName`,reservationfacility.`School`,reservationfacility.`Email`,reservationfacility.`Status`,reservationfacility.`Campus`
				FROM reservationfacility
				INNER JOIN tbl_facilities ON reservationfacility.`Facility` = tbl_facilities.`Faci_ID` ORDER BY Res_id DESC LIMIT 1";
$run = mysqli_query($con, $qry);

	if(mysqli_num_rows($run) > 0){
		foreach($run as $row){

			?>
				<tr>
					<td class="Tracking"><?= $row['Res_id'];?></td>
					<td><?= $row['ReqName'];?></td>
					<td><?= $row['School'];?></td>
					<td><?= $row['Email'];?></td>
					<td><?= $row['nature'];?></td>
					<td><?= $row['Purpose'];?></td>
					<td><?= $row['Facility'];?></td>
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