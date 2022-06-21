<?php
//Updated June 2 2022 changed into using search bar to view reservation// 
//Updated June 9 2022 changed table values and design//
include('../Connection/Connection.php');


if(isset($_POST['search1'])){

		$Eqi = $_POST['Pass'];
		$loc = $_POST['LoCatIon'];

		$Cqry= "SELECT * from `tltd_pass` WHERE `Pass_ID` = '$Eqi' AND `Location` = '$loc'";
		$Crun = mysqli_query($con, $Cqry);


		if(mysqli_num_rows($Crun) > 0){
			foreach($Crun as $row){

				$sample=$row['Resrv_ID'];
				//$st=str_split($sample,9);

				$Aqry= "SELECT * from `reservation` WHERE `Res_id` = '$sample'";
				$Arun = mysqli_query($con, $Aqry);
				$Arow = mysqli_fetch_assoc($Arun);

				?>
								<tr>
									<td>
										<form method="POST">
										 <textarea class="form-control" type="text" id="comment" value=" " name="comment" placeholder="type remarks" style="margin-bottom:10px; background-color:lightblue; color:black;"></textarea>
										 <button class='btn btn-primary' Style="Width:115px"  name="Remarks"  value="<?= $Arow['Res_id'];?>">Remarks</button>
										<button class='btn btn-success'  name="Returned" value="<?= $Arow['Res_id'];?>">Returned</button>
								    	</form>
								    </td>
								    <td><?= $row['Pass_ID'];?></td>
									<td class="Tracking">
										<a id="myBtn" onclick="TnC()"><?= $Arow['Res_id'];?></a>

								 		<div id="myModal" class="modal">
					              		<div class="modal-content"><span class="close">&times;</span>Information<br>
					                		ID: <?= $Arow['Res_id'];?><br>
					                	Status: <?= $Arow['Status'];?><br>
										 User:	<?= $Arow['User'];?><br>
										 Location: <?= $Arow['Office'];?><br>
										 Name: <?= $Arow['ReqName'];?><br>
										 School ID:	<?= $Arow['SchoolID'];?><br>
										 School:	<?= $Arow['School'];?><br>
										 Email: <?= $Arow['Email'];?><br>
										 Room/Venue: <?= $Arow['Room_Venue'];?><br>
										 Nature: <?= $Arow['nature'];?><br>
											Purpose: <?= $Arow['Purpose'];?><br>
										Reserve Date:	<?= $Arow['resDate'];?><br>
										Time Start:	<?= $Arow['Time_Start'];?><br>
										Time End:	<?= $Arow['Time_End'];?><br><br>
					              		</div>
					           			</div>
									</td>
									</td>
									<td><?= $row['Eqi_tags'];?></td>
									<td><?= $Arow['Time_End'];?></td>
								</tr>
							<?php
			}
		}

}

?>