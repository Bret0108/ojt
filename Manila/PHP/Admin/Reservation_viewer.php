<?PHP
session_start();
//Updated June 9 2022 changed table values and design added user and office columns, removed Equipment/Facility option, added name search option//
//Updated June 12 2022 updated equipment Tag query added session value name//
//Updated June 16 2022 updated search query option added search day//
include('../Connection/Connection.php');

if(isset($_POST['check'])){
	$Choice = $_POST['pili'];
	$Choice1 = $_POST['dte'];
	$Choice2 = $_POST['pili2'];
	$Choice3 = $_POST['pili3'];
	$Choice4 = $_POST['nme'];
	$Choice5 = $_POST['oFFice'];
	$Choice6 = $_POST['frm'];
	$Choice7 = $_POST['to'];

	$_SESSION['statS'] = $Choice;
	$_SESSION['Neym'] = $Choice1;
	$_SESSION['moNth'] = $Choice2;
	$_SESSION['yEar'] = $Choice3;
	$_SESSION['nme'] = $Choice4;
	$_SESSION['offcs'] = $Choice5;
	$_SESSION['frm'] = $Choice6;
	$_SESSION['to'] = $Choice7;

		$sqls1 = "UPDATE `reservation` SET `Status`= 'CANCELLED', `Checked_By` = '$userchkr', `Last_Update` = NOW(), `Remarks` = 'Did not borrow equipment' WHERE `resDate` < CURRENT_DATE AND `Status` = 'RESERVED'";
			mysqli_query($con, $sqls1);


		$qry= "SELECT * FROM `reservation` WHERE `Status` LIKE '%$Choice%' AND `Office` = '$Choice5' AND `resDate` = '$Choice1' AND `ReqName` LIKE '%$Choice4%' OR `Status` LIKE '%$Choice%' AND `Office` = '$Choice5' AND monthname(`resDate`) LIKE '$Choice2' AND year(`resDate`) LIKE '$Choice3' AND `ReqName` LIKE '%$Choice4%' OR `Status` LIKE '%$Choice%' AND `ReqName` LIKE '%$Choice4%' AND `Office` = '$Choice5' AND `resDate` BETWEEN '$Choice6' AND '$Choice7' ORDER BY `Res_id` DESC";

		$run = mysqli_query($con, $qry);
		
		if(mysqli_num_rows($run) > 0){
			foreach($run as $row){

				$sample=$row['Equipment'];
				$st=str_split($sample,9);


				?>
					<tr>
						<td><?= $row['Status'];?></td>
						<td><?= $row['Remarks'];?></td>
						<td><?= $row['Last_Update'];?></td>
						<td><?= $row['Released By'];?></td>
						<td><?= $row['Recieved By'];?></td>
						<td class="Tracking"><?= $row['Res_id'];?></td>
						<td>
						<?php	
							for ($i=0; $i<=15; $i++){

							$wry1 = "SELECT `type` FROM tbl_equipment WHERE `Equip_ID` = '$st[$i]'";
							$run1 = mysqli_query($con, $wry1);
							$row1 = mysqli_fetch_assoc($run1);
							$sample1 = $row1['type'];
								echo "$sample1 ";
							}
						?>
				
						</td>
						<td><?= $row['User'];?></td>
						<td><?= $row['Office'];?></td>
						<td><?= $row['resDate'];?></td>
						<td><?= $row['Time_Start'];?></td>
						<td><?= $row['Time_End'];?></td>
						<td><?= $row['ReqName'];?></td>
						<td><?= $row['SchoolID'];?></td>
						<td><?= $row['School'];?></td>
						<td><?= $row['Email'];?></td>
						<td><?= $row['Room_Venue'];?></td>
						<td><?= $row['nature'];?></td>
						<td><?= $row['Purpose'];?></td>
					</tr>
				<?php
			}	
		}
}

?>