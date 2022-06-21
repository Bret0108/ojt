<?php
//Update June 9 2022 Updated table value of Equipment tag//
include('../Connection/Connection.php');


if(isset($_GET['check'])){

$Eqi = $_GET['Iny'];



	$Cqry= "SELECT * from reservation WHERE `Res_id` = '$Eqi'";
		$Crun = mysqli_query($con, $Cqry);
		$Crow = mysqli_fetch_assoc($Crun);

		$Cdate = $Crow['resDate'];

		if(mysqli_num_rows($Crun) > 0){
				foreach($Crun as $Crow){
				
				$sample=$Crow['Equipment'];
				$st=str_split($sample,9);

					?>
						<tr>
							<td class="Tracking">
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
							<td class="Tracking"><?= $Crow['Res_id'];?></td>
							<td class="Tracking"><?= $Crow['Status'];?></td>
							<td class="Tracking"><?= $Crow['resDate'];?></td>
							<td class="Tracking"><?= $Crow['Time_Start'];?></td>
							<td class="Tracking"><?= $Crow['Time_End'];?></td>
						</tr>
					<?php
					
				}

		}

	$qry= "SELECT * from reservation WHERE `Res_id` != '$Eqi' AND `resDate` = '$Cdate' AND `Status` = 'RESERVED'";
		$run = mysqli_query($con, $qry);

		if(mysqli_num_rows($run) > 0){
				foreach($run as $row){

					$sample=$Crow['Equipment'];
				$st=str_split($sample,9);

					?>
						<tr>
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
							<td><?= $row['Res_id'];?></td>
							<td><?= $row['Status'];?></td>
							<td><?= $row['resDate'];?></td>
							<td><?= $row['Time_Start'];?></td>
							<td><?= $row['Time_End'];?></td>
						</tr>
					<?php
					
				}

		}

}
?>