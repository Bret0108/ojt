<?php
//Update June 9 2022 Removed reservation facilities queries//
session_start();
$userchkr = $_SESSION['Username'];
include('../Connection/Connection.php');



if(isset($_GET['id'])){
	$Res_id = $_GET['id'];
	$sql = "UPDATE `reservation` SET `Status`= 'CANCELLED' , `Checked_By` = '$userchkr', `Last_Update` = NOW() WHERE `Res_id` = $Res_id AND `Status` = 'PENDING'";
	$run = mysqli_query($con, $sql);

  }


else if(isset($_POST['Didnot'])){
	$Res_ids1 = $_POST['Didnot'];
	$sqls1 = "UPDATE `reservation` SET `Status`= 'CANCELLED', `Checked_By` = '$userchkr', `Last_Update` = NOW(), `Remarks` = 'Did not borrow equipment' WHERE `Res_id` = $Res_ids1 AND `Status` = 'RESERVED'";
	$run1 = mysqli_query($con, $sqls1);
}


else if(isset($_POST['Remarks'])){
	$Res_ids3 = $_POST['Remarks'];
	$Comment = $_POST['comment'];
	$sqls3 = "UPDATE `reservation` SET `Remarks`= '$Comment', `Checked_By` = '$userchkr', `Last_Update` = NOW() WHERE `Res_id` = $Res_ids3 AND `Status` = 'ONGOING'";
	$run3 = mysqli_query($con, $sqls3);
}


?>