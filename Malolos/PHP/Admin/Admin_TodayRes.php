<?php
include('../Connection/Connection.php');

$qry= "SELECT * FROM `reservation` WHERE `resDate` = CURRENT_DATE AND `Status` = 'RESERVED'";

$run = mysqli_query($con, $qry);

if(mysqli_num_rows($run) > 0){
				foreach($run as $row){

					?>
						<tr>
							<td>
								<form method="POST">
								<button class='btn btn-success'  name="Borrowed" value="<?= $row['Res_id'];?>">Borrowed</button>
						    	<button class='btn btn-danger' Style="margin-top:10px; Width:115px"  name="Didnot" value="<?= $row['Res_id'];?>">Did not</button>
						    	</form>
						    </td>
							<td class="Tracking"><?= $row['Res_id'];?></td>
							<td><?= $row['ReqName'];?></td>
							<td><?= $row['School'];?></td>
							<td><?= $row['Email'];?></td>
							<td><?= $row['Room_Venue'];?></td>
							<td><?= $row['nature'];?></td>
							<td><?= $row['Purpose'];?></td>
							<td><?= $row['Equipment'];?></td>
							<td><?= $row['resDate'];?></td>
							<td><?= $row['Time_Start'];?></td>
							<td><?= $row['Time_End'];?></td>
							<td><?= $row['Status'];?></td>
							<td><?= $row['Campus'];?></td>
						</tr>
					<?php
					
				}
}


$qry1= "SELECT * FROM `reservationfacility` WHERE `resDate` = CURRENT_DATE AND `Status` = 'RESERVED'";

$run1 = mysqli_query($con, $qry1);

if(mysqli_num_rows($run1) > 0){
				foreach($run1 as $row1){

					?>
						<tr>
							<td>
								<form method="POST">
								<button class='btn btn-success' name="Borrowed1" value="<?= $row1['Res_id'];?>">Borrowed</button>
    							<button class='btn btn-danger' Style="margin-top:10px; Width:115px" name="Didnot1" value="<?= $row1['Res_id'];?>">Did not</button>
    							</form>
    						</td>
							<td class="Tracking"><?= $row1['Res_id'];?></td>
							<td><?= $row1['ReqName'];?></td>
							<td><?= $row1['School'];?></td>
							<td><?= $row1['Email'];?></td>
							<td></td>
							<td><?= $row1['nature'];?></td>
							<td><?= $row1['Purpose'];?></td>
							<td><?= $row1['Facility'];?></td>
							<td><?= $row1['resDate'];?></td>
							<td><?= $row1['Time_Start'];?></td>
							<td><?= $row1['Time_End'];?></td>
							<td><?= $row1['Status'];?></td>
							<td><?= $row1['Campus'];?></td>
						</tr>
					<?php
					
				}
}

?>