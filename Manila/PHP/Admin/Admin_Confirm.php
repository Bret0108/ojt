<?php
//Update June 9 2022 Removed reservation facilities queries//
session_start();
$userchkr = $_SESSION['Username'];
include('../Connection/Connection.php');


if(isset($_GET['name'])){
	$Res_id = $_GET['name'];
	$sql = "UPDATE `reservation` SET `Status`= 'RESERVED', `Checked_By` = '$userchkr', `Last_Update` = NOW()  WHERE `Res_id` = $Res_id AND `Status` = 'PENDING'";
	$run = mysqli_query($con, $sql);

}

else if(isset($_POST['Borrowed'])){

	$Res_id1 = $_POST['Borrowed'];
	$locations = $_POST['LoCatIon'];
	$PassNo = $_POST['PassNo'];
	$Eq_Tag = $_POST['Eq_Tag'];


	$sql1 = "UPDATE `reservation` SET `Status`= 'ONGOING', `Checked_By` = '$userchkr', `Last_Update` = NOW()  WHERE `Res_id` = $Res_id1 AND `Status` = 'RESERVED'";
	 mysqli_query($con, $sql1);

	$sql2 = "UPDATE `tltd_pass` SET `Eqi_tags`= '$Eq_Tag', `Resrv_ID` = '$Res_id1', `State` = 'UNAVAILABLE' WHERE `Pass_ID` = '$PassNo' AND `Location` = '$locations' ";
	 mysqli_query($con, $sql2);




}

else if(isset($_POST['Returned'])){
	$Res_id2 = $_POST['Returned'];

	$sql2 = "UPDATE `reservation` SET `Status`= 'COMPLETED', `Checked_By` = '$userchkr', `Last_Update` = NOW()  WHERE `Res_id` = $Res_id2 AND `Status` = 'ONGOING'";
	$run3 = mysqli_query($con, $sql2);

	$sql2 = "UPDATE `tltd_pass` SET `Eqi_tags`= ' ', `Resrv_ID` = ' ', `State` = 'AVAILABLE' WHERE `Resrv_ID` = '$Res_id2'";
	 mysqli_query($con, $sql2);

}

?>