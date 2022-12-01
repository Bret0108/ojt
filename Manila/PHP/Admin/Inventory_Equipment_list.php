<?PHP
session_start();
//Update June 2 2022 Removed Facilities queries//
//Updated June 3 2022 Added purchase condem date office column, added search parameter office//
//Updated June 9 2022 Added Category option//
//Updated June 16 2022 change query search parameters, added model variable//
include('../Connection/Connection.php');


if(isset($_POST['check'])){

$option = $_POST['Eqi_type'];
$tYpe = $_POST['pili'];
$Opis = $_POST['Opis'];

$_SESSION['tYpe'] = $tYpe;
$_SESSION['option'] = $option;
$_SESSION['Opis'] = $Opis; 

$qry= "SELECT * FROM `tbl_equipment` WHERE `type` = '$tYpe' AND `Stats` = '$option' AND `Office` = '$Opis'";
$run = mysqli_query($con, $qry);

				if(mysqli_num_rows($run) > 0){
								foreach($run as $row){

									?>
										<tr>
											<td><?= $row['Tag'];?></td>
											<td><?= $row['type'];?></td>
											<td><?= $row['name'];?></td>
											<td><?= $row['MODel'];?></td>
											<td><?= $row['information'];?></td>
											<td><?= $row['Stats'];?></td>
											<td><?= $row['Purchase Date'];?></td>
											<td><?= $row['Condemn Date'];?></td>
											<td><?= $row['Office'];?></td>
										</tr>
									<?php
									
								}
				}

}


?>