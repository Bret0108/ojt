<?php
include('../Connection/Connection.php');



if(isset($_GET['id'])){
	$Res_id = $_GET['id'];
	$sql = "UPDATE `reservation` SET `Status`= 'CANCELLED' WHERE `Res_id` = $Res_id AND `Status` = 'PENDING'";
	$run = mysqli_query($con, $sql);

  }

else if(isset($_GET['name'])){
	$Res_ids = $_GET['name'];
	$sqls = "UPDATE `reservationfacility` SET `Status`= 'CANCELLED' WHERE `Res_id` = $Res_ids AND `Status` = 'PENDING'";
	$run = mysqli_query($con, $sqls);

}

else if(isset($_POST['Didnot'])){
	$Res_ids1 = $_POST['Didnot'];
	$sqls1 = "UPDATE `reservation` SET `Status`= 'DIDNOTBORROW' WHERE `Res_id` = $Res_ids1 AND `Status` = 'RESERVED'";
	$run1 = mysqli_query($con, $sqls1);
}

else if(isset($_POST['Didnot1'])){
	$Res_ids2 = $_POST['Didnot1'];
	$sqls2 = "UPDATE `reservationfacility` SET `Status`= 'DIDNOTBORROW' WHERE `Res_id` = $Res_ids2 AND `Status` = 'RESERVED'";
	$run2 = mysqli_query($con, $sqls2);

}

else if(isset($_POST['Remarks'])){
	$Res_ids3 = $_POST['Remarks'];
	$Comment = $_POST['comment'];
	$sqls3 = "UPDATE `reservation` SET `Remarks`= '$Comment' WHERE `Res_id` = $Res_ids3 AND `Status` = 'ONGOING'";
	$run3 = mysqli_query($con, $sqls3);
}

else if(isset($_POST['Remarks1'])){
	$Res_ids4 = $_POST['Remarks1'];
	$Comment1 = $_POST['comment1'];
	$sqls4 = "UPDATE `reservationfacility` SET `Remarks`= '$Comment1' WHERE `Res_id` = $Res_ids4 AND `Status` = 'ONGOING'";
	$run4 = mysqli_query($con, $sqls4);

}
?>