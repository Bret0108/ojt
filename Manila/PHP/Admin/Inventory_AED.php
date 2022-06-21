<?PHP
session_start();
$userchkr = $_SESSION['Username'];
//Update June 2 2022 Removed Facilities queries//
//Update June 3 2022 Added purchase condemn and office in update and add function//
//Update June 9 2022 Updated AED added last update and admin change log//
//Update June 16 2022 Updated AED added model value//
include('../Connection/Connection.php');

if(isset($_POST['checks'])){

$option = $_POST['EF_ID'];

$qry= "SELECT * FROM `tbl_equipment` WHERE `Tag` = '$option'";
$run = mysqli_query($con, $qry);
$updt = mysqli_fetch_assoc($run);

}


if(isset($_POST['Update'])){

$option2 = $_POST['IDe'];
$tyPe = $_POST['type'];
$naMe = $_POST['name'];
$inFormation = $_POST['information'];
$staTus = $_POST['pili'];
$ConDate = $_POST['conDate'];
$office = $_POST['pili1'];
$mOwDel = $_POST['mOwDel'];

	if($staTus == "Available"){

	$qry2= "UPDATE `tbl_equipment` SET `type` = '$tyPe', `name` = '$naMe',`MODel` = '$mOwDel', `information` = '$inFormation',`Stats` = 'Available' , `Checked_By` = '$userchkr', `Last_Update` = NOW() WHERE `Tag` = '$option2'";
	$run2 = mysqli_query($con, $qry2);

	}
	else if($staTus == "Condemned"){

	$qry2= "UPDATE `tbl_equipment` SET `type` = '$tyPe', `name` = '$naMe', `MODel` = '$mOwDel', `information` = '$inFormation', `Stats` = 'Condemned', `Condemn Date` = '$ConDate', `Checked_By` = '$userchkr', `Last_Update` = NOW() WHERE `Tag` = '$option2'";
	$run2 = mysqli_query($con, $qry2);

	}
	else if($staTus == " "){
		if($office == " "){
			$qry2= "UPDATE `tbl_equipment` SET `type` = '$tyPe', `name` = '$naMe', `MODel` = '$mOwDel', `information` = '$inFormation' , `Checked_By` = '$userchkr', `Last_Update` = NOW() WHERE `Tag` = '$option2'";
			$run2 = mysqli_query($con, $qry2);
		}
		else if($office == "TLTD_MAIN"){
			$qry2= "UPDATE `tbl_equipment` SET `type` = '$tyPe', `name` = '$naMe', `MODel` = '$mOwDel', `information` = '$inFormation', `Office`= 'TLTD_MAIN' , `Checked_By` = '$userchkr', `Last_Update` = NOW()  WHERE `Tag` = '$option2'";
			$run2 = mysqli_query($con, $qry2);
		}
		else if($office == "Dent_Sci"){
			$qry2= "UPDATE `tbl_equipment` SET `type` = '$tyPe', `name` = '$naMe', `MODel` = '$mOwDel', `information` = '$inFormation', `Office`= 'DENT_SCI' , `Checked_By` = '$userchkr', `Last_Update` = NOW() WHERE `Tag` = '$option2'";
			$run2 = mysqli_query($con, $qry2);
		}
		else if($office == "LAH_sub_center"){
			$qry2= "UPDATE `tbl_equipment` SET `type` = '$tyPe', `name` = '$naMe', `MODel` = '$mOwDel', `information` = '$inFormation', `Office`= 'LAH_SUB_CENTER' , `Checked_By` = '$userchkr', `Last_Update` = NOW() WHERE `Tag` = '$option2'";
			$run2 = mysqli_query($con, $qry2);
		}

	}

}


if(isset($_POST['Add'])){

$option4 = $_POST['IDe'];
$tyPe = $_POST['type'];
$naMe = $_POST['name'];
$mOwDel = $_POST['mOwDel'];
$inFormation = $_POST['information'];
$purchDate = $_POST['purchDate'];
$office = $_POST['pili1'];

		$qry4 = "INSERT INTO tbl_equipment(`Tag`,`type`,`name`,`MODel`,`information`,`Purchase Date`,`Office`,`Checked_By`,`Last_Update`) VALUES('$option4','$tyPe','$naMe','$mOwDel','$inFormation', '$purchDate','$office','$userchkr',NOW())";
		$run4 = mysqli_query($con, $qry4);
}

if(isset($_POST['Delete'])){

$option5 = $_POST['IDe'];


$qry5 = "DELETE FROM `tbl_equipment` WHERE `Tag` = '$option5'";
$run5 = mysqli_query($con, $qry5);
}

?>