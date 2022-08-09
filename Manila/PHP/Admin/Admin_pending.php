<?php
//Updated June 9 2022 changed table values and design//
error_reporting(0); //comment this to see warnings and notice

include('../Connection/Connection.php');


		$qry= "SELECT * from `reservation` WHERE `Status` = 'PENDING' LIMIT 10";
		$run = mysqli_query($con, $qry);

			if(mysqli_num_rows($run) > 0){
				foreach($run as $row){

				$sample=$row['Equipment'];
				$st=str_split($sample,9);
			

					?>
						<tr>
							<td>
								<a class='btn btn-success' href='Admin_home.php? name="<?= $row['Res_id'];?>"'>Confirm</a>
						    	<a class='btn btn-danger' Style=" Width:100px; margin-top:10px;"  href='Admin_home.php? id="<?= $row['Res_id'];?>"'>Cancel</a>
						    </td>
							<td class="Tracking">
								<a id="myBtn" onclick="TnC()"><?= $row['Res_id'];?></a>

								 <div id="myModal" class="modal">

					              <!-- Modal content -->
					              <div class="modal-content">Information
					                <span class="close">&times;</span>
					                		ID: <?= $row['Res_id'];?><br>
					                	Status: <?= $row['Status'];?><br>
										 User:	<?= $row['User'];?><br>
										 Location: <?= $row['Office'];?><br>
										 Name: <?= $row['ReqName'];?><br>
										 School ID:	<?= $row['SchoolID'];?><br>
										 School:	<?= $row['School'];?><br>
										 Email: <?= $row['Email'];?><br>
										 Room/Venue: <?= $row['Room_Venue'];?><br>
										 Nature: <?= $row['nature'];?><br>
											Purpose: <?= $row['Purpose'];?><br>
					              </div>

					            </div>

							</td>
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
							<td><?= $row['resDate'];?></td>
							<td><?= $row['Time_Start'];?></td>
							<td><?= $row['Time_End'];?></td>
						</tr>
					<?php	
				}
			}
?>