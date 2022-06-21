<?php
error_reporting(0); //comment this to see warnings and notice

include('Connection/Connection.php');

if(isset($_GET['sub']))  
{
	$track_id=$_GET['Res_id'];


	$qry= "SELECT * FROM reservation WHERE `Res_id` = $track_id ";
	$run = mysqli_query($con, $qry);

	if(mysqli_num_rows($run) > 0){
		foreach($run as $row){

	$sample=$row['Equipment'];
	$st=str_split($sample,9);

				?>
					<tr>
						<td class="Tracking"><?= $row['Res_id'];?></td>
						<td><?= $row['Status'];?></td>
						<td><?= $row['ReqName'];?></td>
						<td><?= $row['School'];?></td>
						<td><?= $row['resDate'];?></td>
						<td><?= $row['Time_Start'];?></td>
						<td><?= $row['Time_End'];?></td>
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
						<td><?= $row['Email'];?></td>
						<td><?= $row['Room_Venue'];?></td>
					</tr>
				<?php

				}




			}
			else{
				
			}
}
?>