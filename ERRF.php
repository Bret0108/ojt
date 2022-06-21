<?php
//June 15 2022 created EquipmentRepairRequestForm//
include('Connection/Connection.php');

if(isset($_POST['ERRF'])){

	$BuIlding = $_POST['BuIlding'];
	$rOOm = $_POST['rOOm'];
	$DATe = $_POST['DATe'];
	$filename2 = $_FILES['uploadfile2']["name"];
	$tempname2 = $_FILES["uploadfile2"]["tmp_name"];
	$folder2 = "./upload/" . $filename2;
	$filename3 = $_FILES['uploadfileATTESTEDBY']["name"];
	$tempname3 = $_FILES["uploadfileATTESTEDBY"]["tmp_name"];
	$folder3 = "./upload/" . $filename3;
	$EQpmt = $_POST['EQpmt'];
	$MoDEL = $_POST['MoDEL'];
	$serl = $_POST['serl'];
	$equNO = $_POST['equNO'];
	$Compt = $_POST['Compt'];
	$NAMES = $_POST['NAMES'];
	$DEPT = $_POST['DEPT'];
	$OtherDept = $_POST['OtherDept'];
	$actntkn = $_POST['actntkn'];
	$RePaird = $_POST['RePaird'];
	$RemaRKS = $_POST['RemaRKS'];
	$PNAMES = $_POST['PNAMES'];
	$DateTime = $_POST['DateTime'];
	$PNAMe = $_POST['PNAMe'];
	$sErvice = $_POST['sErvice'];
	$DateOut = $_POST['DateOut'];
	$DateReturn = $_POST['DateReturn'];
	$ORnum = $_POST['ORnum'];
	$NAMESATTESTEDBY = $_POST['NAMESATTESTEDBY'];
	$DateTimeATTESTEDBY = $_POST['DateTimeATTESTEDBY'];
	$NAMESAPPROVED_BY = $_POST['NAMESAPPROVED_BY'];
	$filename4 = $_FILES['uploadfileAPPROVED_BY']["name"];
	$tempname4 = $_FILES["uploadfileAPPROVED_BY"]["tmp_name"];
	$folder4 = "./upload/" . $filename4;


	$qry="INSERT IGNORE INTO equipmentrepairrequest(`DescEquip`,`Model`,`SerialNo`,`DescEquipNo`,`Complaint`,`ReportName`,`ReportDept`,`ActionTaken`,`Repaired`,`InhouseRemarks`,`InhouseName`,`InhouseSig`,`InhouseDateTime`,`OutsideName`,`OutsideServicecntr`,`OutsideDateout`,`OutsideReturn`,`OutsideORno`,`AttestName`,`AttestSig`,`AttestDateTime`,`ApprovName`,`ApprovSig`,`BuildiNG`,`ROoM`,`MDate`) VALUES('$EQpmt','$MoDEL','$serl','$equNO','$Compt','$NAMES','$DEPT,$OtherDept','$actntkn','$RePaird','$RemaRKS','$PNAMES','$filename2','$DateTime','$PNAMe','$sErvice','$DateOut','$DateReturn','$ORnum','$NAMESATTESTEDBY','$filename3','$DateTimeATTESTEDBY','$NAMESAPPROVED_BY','$filename4','$BuIlding','$rOOm','$DATe')";
		mysqli_query($con,$qry);
		 if (move_uploaded_file($tempname2, $folder2)) {
		 	?>
			<div class="alert alert-primary d-flex align-items-center" role="alert" style = "margin-bottom:0px;">
					  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
					    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
					  </svg>&nbsp;&nbsp;
					  <div>
					  	Repair Request Submitted!! Thank you for your response.
					  </div>
					</div>
			<?PHP
    	}
    	 if (move_uploaded_file($tempname3, $folder3)) {
		 
    	}
    	 if (move_uploaded_file($tempname4, $folder4)) {
		 	
    	}


}


?>