<?PHP
session_start();
$userchkr = $_SESSION['Username'];
//Update June 2 2022 Removed Facilities queries//
//Update June 3 2022 Added purchase condemn and office in update and add function//
//Update June 9 2022 Updated AED added last update and admin change log//
include('../Connection/Connection.php');

if(isset($_POST['checks'])){

$option = $_POST['EF_ID'];

$qry= "SELECT * FROM `equipmentrepairrequest` WHERE `Repair_ID` = '$option'";
$run = mysqli_query($con, $qry);
$updt = mysqli_fetch_assoc($run);
}


if(isset($_POST['Update'])){

$filename2 = $_FILES['uploadfile2']["name"];
$tempname2 = $_FILES["uploadfile2"]["tmp_name"];
$folder2 = "./upload/" . $filename2;
$filename3 = $_FILES['uploadfileATTESTEDBY']["name"];
$tempname3 = $_FILES["uploadfileATTESTEDBY"]["tmp_name"];
$folder3 = "./upload/" . $filename3;
$filename4 = $_FILES['uploadfileAPPROVED_BY']["name"];
$tempname4 = $_FILES["uploadfileAPPROVED_BY"]["tmp_name"];
$folder4 = "./upload/" . $filename4;
$NAMESATTESTEDBY = $_POST['NAMESATTESTEDBY'];
$DateTimeATTESTEDBY = $_POST['DateTimeATTESTEDBY'];
$NAMESAPPROVED_BY = $_POST['NAMESAPPROVED_BY'];
$PNAMES = $_POST['PNAMES'];
$DateTime = $_POST['DateTime'];

$option2 = $_POST['EF_ID'];

$qry2= "UPDATE `equipmentrepairrequest` SET `InhouseName` = '$PNAMES',`InhouseSig` = '$filename2',`InhouseDateTime` = '$DateTime', `AttestName` = '$NAMESATTESTEDBY', `AttestSig` = '$filename3', `AttestDateTime` = '$DateTimeATTESTEDBY', `ApprovName` = '$NAMESAPPROVED_BY', `ApprovSig` = '$filename4' WHERE `Repair_ID` LIKE '%$option2%'";
	$run2 = mysqli_query($con, $qry2);

	if (move_uploaded_file($tempname2, $folder2)) {

	}
	if (move_uploaded_file($tempname3, $folder3)) {
		 
    }
    if (move_uploaded_file($tempname4, $folder4)) {
		 	
    }

}



if(isset($_POST['Delete'])){

$option5 = $_POST['EF_ID'];


$qry5 = "DELETE FROM `equipmentrepairrequest` WHERE `Repair_ID` LIKE '%$option5%'";
$run5 = mysqli_query($con, $qry5);
}

?>