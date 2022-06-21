<?php
session_start();
//Updated June 2 2022 changed into using search bar to view reservation// 
//Updated June 9 2022 changed table values and design Added User and Office columns//
include('../Connection/Connection.php');

if(isset($_GET['search'])){

		$Eqi = $_GET['Iny'];
		$_SESSION['reServed'] = $Eqi;

		$Cqry= "SELECT * from `reservation` WHERE `Res_id` = '$Eqi' AND `Status` = 'RESERVED'";
		$Crun = mysqli_query($con, $Cqry);

		if(mysqli_num_rows($Crun) > 0){
			foreach($Crun as $row){

				$sample=$row['Equipment'];
				$st=str_split($sample,9);


				?>
								<tr>
									<td>
										<form method="POST">
										<a class='btn btn-success' style="text-decoration: none; color:white;" id="myBtn1" onclick="TnC1()" value="">Equipment Pass</a>
								    	<button class='btn btn-danger' Style="margin-top:10px; Width:115px"  name="Didnot" value="<?= $row['Res_id'];?>">Cancel</button>
								    	</form>
								    </td>
									<td class="Tracking">
								<a id="myBtn" onclick="TnC()"><?= $row['Res_id'];?></a>

								 <div id="myModal" class="modal">
					              <div class="modal-content"><span class="close">&times;</span>Information
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

}

//$qry= "SELECT * FROM `reservation` WHERE `resDate` = CURRENT_DATE AND `Status` = 'RESERVED'";//
//$run = mysqli_query($con, $qry);//
		?>
			
			<div id="myModal1" class="modal">
              <!-- Modal content -->
              <div class="modal-content1"><span class="close1">&times;</span>TLTD EQUIPMENT PASS<br>
              	<form method="POST">
              	<div class="row">
              		 <div class="col-25">
			            <label for="fname" style="color:black;">Location</label>
			          </div>
			            <div class="col-75">
			                 <select name="LoCatIon" id ="office">
			                 <option  value=" ">Select</option>
			                 <option  value="TLTD_MAIN">TLTD_MAIN</option>
			                 <option  value="DENT_SCI">DENT_SCI</option>
			                 <option  value="LAH_SUB_CENTER">LAH_SUB_CENTER</option>
			                </select>
			          </div>



		           <div class="col-25">
		            <label for="fname" style="color:black;">Pass No.</label>
		          </div>
		          <div class="col-75">
		                 <select name="PassNo">
		                <?php $sql = "SELECT Pass_ID FROM `tltd_pass` WHERE `State` = 'AVAILABLE' GROUP BY `Pass_ID`";
		                $all_categories = mysqli_query($con,$sql); 
		                while ($category = mysqli_fetch_array(
		                        $all_categories,MYSQLI_ASSOC)):; 
		                ?>
		                <option value="<?=$category['Pass_ID'];?>"><?=$category['Pass_ID'];?>
		                </option>
		                  <?php 
		                      endwhile; 
		                  ?>
		                 </select>
		          </div>
		          	 <div class="col-25">
		            <label for="fname" style="color:black;">Equipment Tag</label>
		          </div>
		          <div class="col-75">
		                <textarea class="form-control" type="text" id="Year" value="" name="Eq_Tag">
		                 </textarea>

		         </div>

				<button class='btn btn-success'  name="Borrowed" value="<?= $row['Res_id'];?>">Confirm</button>
				</form>
              </div>
            </div>
		
		<?php



?>