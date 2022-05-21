<?PHP
error_reporting (E_ALL ^ E_NOTICE);
include('../Connection/Connection.php');

if(isset($_POST['check'])){

$option = $_POST['Eqi_type'];

$qry= "SELECT * FROM `tbl_equipment` WHERE `type` LIKE '%$option%' OR `Equip_ID` Like '%$option%'";
$run = mysqli_query($con, $qry);

				if(mysqli_num_rows($run) > 0){
								foreach($run as $row){

									?>
										<tr>
											<td><?= $row['Equip_ID'];?></td>
											<td><?= $row['type'];?></td>
											<td><?= $row['name'];?></td>
											<td><?= $row['information'];?></td>
											<td><?= $row['Availability'];?></td>
											<td><?= $row['Site'];?></td>
										</tr>
									<?php
									
								}
				}

}

if(isset($_POST['check'])){

$option1 = $_POST['Eqi_type'];

$qry1 = "SELECT * FROM `tbl_facilities` WHERE `type` LIKE '%$option%' OR `Faci_ID` Like '%$option%' ";
$run1 = mysqli_query($con, $qry1);

				if(mysqli_num_rows($run1) > 0){
								foreach($run1 as $row1){

									?>
										<tr>
											<td><?= $row1['Faci_ID'];?></td>
											<td><?= $row1['type'];?></td>
											<td><?= $row1['name'];?></td>
											<td><?= $row1['information'];?></td>
											<td><?= $row1['Availability'];?></td>
											<td><?= $row1['Site'];?></td>
										</tr>
									<?php
									
								}
				}

}


?>