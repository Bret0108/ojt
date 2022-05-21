<?php
include('../Connection/Connection.php');


if(isset($_GET['check'])){

$Eqi = $_GET['Iny'];



	$qry= "SELECT reservation.`Equipment`,tbl_equipment.`name`,tbl_equipment.`type`,tbl_equipment.`information`,tbl_equipment.`Site`,reservation.`Res_id`,reservation.`resDate`,reservation.`Time_Start`,reservation.`Time_End`
			FROM reservation
			INNER JOIN tbl_equipment ON reservation.`Equipment` = tbl_equipment.`Equip_ID` WHERE `Equip_ID` LIKE '%$Eqi%'";

		$run = mysqli_query($con, $qry);

		if(mysqli_num_rows($run) > 0){
				foreach($run as $row){

					?>
						<tr>
							<td><?= $row['Equipment'];?></td>
							<td><?= $row['name'];?></td>
							<td><?= $row['type'];?></td>
							<td><?= $row['information'];?></td>
							<td><?= $row['Site'];?></td>
							<td class="Tracking"><?= $row['Res_id'];?></td>
							<td><?= $row['resDate'];?></td>
							<td><?= $row['Time_Start'];?></td>
							<td><?= $row['Time_End'];?></td>
						</tr>
					<?php
					
				}

		}

}

if(isset($_GET['check'])){

	$Eqi = $_GET['Iny'];

	$qry1= "SELECT reservationfacility.`Facility`,tbl_facilities.`name`,tbl_facilities.`type`,tbl_facilities.`information`,tbl_facilities.`Site`,reservationfacility.`Res_id`,reservationfacility.`resDate`,reservationfacility.`Time_Start`,reservationfacility.`Time_End`
			FROM reservationfacility
			INNER JOIN tbl_facilities ON reservationfacility.`Facility` = tbl_facilities.`Faci_ID` WHERE `Faci_ID` LIKE '%$Eqi%'";

		$run1 = mysqli_query($con, $qry1);

		if(mysqli_num_rows($run1) > 0){
				foreach($run1 as $row1){

					?>
						<tr>
							<td><?= $row1['Facility'];?></td>
							<td><?= $row1['name'];?></td>
							<td><?= $row1['type'];?></td>
							<td><?= $row1['information'];?></td>
							<td><?= $row1['Site'];?></td>
							<td class="Tracking"><?= $row1['Res_id'];?></td>
							<td><?= $row1['resDate'];?></td>
							<td><?= $row1['Time_Start'];?></td>
							<td><?= $row1['Time_End'];?></td>
						</tr>
					<?php
					
				}

		}
}
?>