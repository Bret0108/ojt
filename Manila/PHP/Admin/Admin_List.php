<?PHP
include('../Connection/Connection.php');
$qry= "SELECT * FROM `admin_login`";
$run = mysqli_query($con, $qry);

				if(mysqli_num_rows($run) > 0){
								foreach($run as $row){

									?>
										<tr>
											<td><?= $row['Admin_ID'];?></td>
											<td><?= $row['Username'];?></td>
											<td><?= $row['Password'];?></td>
											<td><?= $row['Root'];?></td>
											<td><?= $row['Name'];?></td>
											<td><?= $row['Email'];?></td>
										</tr>
									<?php
									
								}
				}


	if(isset($_POST['checks'])){
		$admin_ID = $_POST['EF_ID'];

		$qry= "SELECT * FROM `admin_login` WHERE `Admin_ID` = '$admin_ID'";
			$run = mysqli_query($con, $qry);
			$updt = mysqli_fetch_assoc($run);

	}

	if(isset($_POST['Update'])){
						$admin_ID = $_POST['admin_ID'];
						$UseA = $_POST['UseA'];
						$PassA = $_POST['PassA'];
						$hashed_password = password_hash($PassA, PASSWORD_DEFAULT);

						$roOtA = $_POST['roOtA'];
						$NameA = $_POST['NameA'];
						$EmailA = $_POST['EmailA'];

						$qry2= "UPDATE `admin_login` SET `Username` = '$UseA', `Password` = '$hashed_password',`Root` = '$roOtA', `Name` = '$NameA',`Email` = '$EmailA' WHERE `Admin_ID` = '$admin_ID'";
							$run2 = mysqli_query($con, $qry2);

							echo '
							<div class="alert alert-success d-flex align-items-center" role="alert"><svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg><div>Update was Successful</div></div>';


					}


					if(isset($_POST['Add'])){
						$admin_ID = $_POST['admin_ID'];
						$UseA = $_POST['UseA'];
						$PassA = $_POST['PassA'];
						$hashed_password = password_hash($PassA, PASSWORD_DEFAULT);
						$roOtA = $_POST['roOtA'];
						$NameA = $_POST['NameA'];
						$EmailA = $_POST['EmailA'];


						$qry4 = "INSERT IGNORE INTO admin_login(`Username`,`Password`,`Root`,`Name`,`Email`) VALUES('$UseA','$hashed_password','$roOtA','$NameA','$EmailA')";
							$run4 = mysqli_query($con, $qry4);

							echo '
							<div class="alert alert-success d-flex align-items-center" role="alert"><svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg><div>added Succesfully</div></div>';

					}
					
					if(isset($_POST['Delete'])){
						$admin_ID = $_POST['admin_ID'];
						$qry5 = "DELETE FROM admin_login WHERE `Admin_ID` = '$admin_ID'";
						$run5 = mysqli_query($con, $qry5);

						echo '
							<div class="alert alert-danger d-flex align-items-center" role="alert"><svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg><div>Deleted Succesfully</div></div>';
					}

?>