<?php
include('Connection/Connection.php');



if(isset($_GET['name'])){
	$Res_id = $_GET['name'];
	$sql = "UPDATE `reservation` SET `Status`= 'PENDING' WHERE `Res_id` = $Res_id";
	$run = mysqli_query($con, $sql);

	echo "Reservation Posted Please wait for the confirmation through email<br>";
	echo "Please take note of your reservation ID";
  }


?>