<?php
include('../Connection/Connection.php');

if(isset($_GET['name'])){
	$Res_id = $_GET['name'];
	$sql = "UPDATE `reservation` SET `Status`= 'RESERVED' WHERE `Res_id` = $Res_id AND `Status` = 'PENDING'";
	$run = mysqli_query($con, $sql);

}
else if(isset($_GET['id'])){
	$Res_ids = $_GET['id'];
	$sqls = "UPDATE `reservationfacility` SET `Status`= 'RESERVED' WHERE `Res_id` = $Res_ids AND `Status` = 'PENDING'";
	$run = mysqli_query($con, $sqls);
}

else if(isset($_POST['Borrowed'])){
	$Res_id1 = $_POST['Borrowed'];
	$sql1 = "UPDATE `reservation` SET `Status`= 'ONGOING' WHERE `Res_id` = $Res_id1 AND `Status` = 'RESERVED'";
	$run1 = mysqli_query($con, $sql1);

}

else if(isset($_POST['Borrowed1'])){
	$Res_ids1 = $_POST['Borrowed1'];
	$sqls1 = "UPDATE `reservationfacility` SET `Status`= 'ONGOING' WHERE `Res_id` = $Res_ids1 AND `Status` = 'RESERVED'";
	$run2 = mysqli_query($con, $sqls1);
}

else if(isset($_POST['Returned'])){
	$Res_id2 = $_POST['Returned'];
	$sql2 = "UPDATE `reservation` SET `Status`= 'COMPLETED' WHERE `Res_id` = $Res_id2 AND `Status` = 'ONGOING'";
	$run3 = mysqli_query($con, $sql2);

}

else if(isset($_POST['Returned1'])){
	$Res_ids2 = $_POST['Returned1'];
	$sqls2 = "UPDATE `reservationfacility` SET `Status`= 'COMPLETED' WHERE `Res_id` = $Res_ids2 AND `Status` = 'ONGOING'";
	$run4 = mysqli_query($con, $sqls2);
}

?>