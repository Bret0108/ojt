<?php
include('Connection/Connection.php');

if(isset($_GET['id'])){
	$Res_id = $_GET['id'];
	$sql = "UPDATE `reservation` SET `Status`= 'RESERVED' WHERE `Res_id` = $Res_id";
	$run = mysqli_query($con, $sql);

}
else if(isset($_GET['name'])){
	$Res_ids = $_GET['name'];
	$sqls = "UPDATE `reservationfacility` SET `Status`= 'RESERVED' WHERE `Res_id` = $Res_ids";
	$run = mysqli_query($con, $sqls);
}

?>