<?php
include('../Connection/Connection.php');



if(isset($_GET['id'])){
	$Res_id = $_GET['id'];
	$sql = "DELETE FROM `reservationfacility` WHERE `Res_id` = $Res_id AND `Status` = 'NONE'";
    $run = mysqli_query($con, $sql);
  }
else{
}
?>