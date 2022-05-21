<?PHP
include('../Connection/Connection.php');

if(isset($_POST['checks'])){

$option = $_POST['EF_ID'];

$qry= "SELECT * FROM `tbl_equipment` WHERE `Equip_ID` = '$option'";
$run = mysqli_query($con, $qry);
$updt = mysqli_fetch_assoc($run);

}

if(isset($_POST['checks'])){

$option1 = $_POST['EF_ID'];

$qry1= "SELECT * FROM `tbl_facilities` WHERE `Faci_ID` = '$option1'";
$run1 = mysqli_query($con, $qry1);
$updt1 = mysqli_fetch_assoc($run1);

}

if(isset($_POST['Update'])){

$option2 = $_POST['IDe'];
$tyPe = $_POST['type'];
$naMe = $_POST['name'];
$inFormation = $_POST['information'];
$avAil = $_POST['avail'];

$qry2= "UPDATE `tbl_equipment` SET `type` = '$tyPe', `name` = '$naMe', `information` = '$inFormation', `Availability` = '$avAil' WHERE `Equip_id` = $option2";
$run2 = mysqli_query($con, $qry2);
}

if(isset($_POST['Update'])){

$option3 = $_POST['IDe'];
$tyPe = $_POST['type'];
$naMe = $_POST['name'];
$inFormation = $_POST['information'];
$avAil = $_POST['avail'];

$qry3= "UPDATE `tbl_facilities` SET `type` = '$tyPe', `name` = '$naMe', `information` = '$inFormation', `Availability` = '$avAil' WHERE `Faci_id` = $option3";
$run3 = mysqli_query($con, $qry3);
}

if(isset($_POST['Add'])){

$option4 = $_POST['IDe'];
$tyPe = $_POST['type'];
$naMe = $_POST['name'];
$inFormation = $_POST['information'];
$Choice = $_POST['pili'];

	if($Choice == 'Equipment'){
		$qry4 = "INSERT INTO tbl_equipment(`type`,`name`,`information`) VALUES('$tyPe','$naMe','$inFormation')";
		$run4 = mysqli_query($con, $qry4);
	}

	else if($Choice == 'Facility'){
		$qry4 = "INSERT INTO tbl_facilities(`type`,`name`,`information`) VALUES('$tyPe','$naMe','$inFormation')";
		$run4 = mysqli_query($con, $qry4);
	}

}

if(isset($_POST['Delete'])){

$option5 = $_POST['IDe'];


$qry5 = "DELETE FROM `tbl_equipment` WHERE `Equip_ID` = $option5";
$run5 = mysqli_query($con, $qry5);
}

if(isset($_POST['Delete'])){

$option6 = $_POST['IDe'];


$qry6 = "DELETE FROM `tbl_facilities` WHERE `Faci_ID` = $option6";
$run6 = mysqli_query($con, $qry6);
}

?>