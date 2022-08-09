<?php
//Update June 3 2022 Added Time Checker for office hours update alert design//
//Update June 7 2022 Added office and user value. Added Null value checker for office equipment//
include('../Connection/Connection.php');
error_reporting(0); //comment this to see warnings and notice

if(isset($_POST['sub']))  
{   

		$Nature=$_POST['Nature'];
		$a=implode(',',$Nature);
		$Purpose=$_POST['Purpose'];
		$b=implode(',',$Purpose);
		$Equipment=$_POST['Equipment'];
		$c=implode(' ',$Equipment);
		$resDate=$_POST['resDate'];
		$TimeStart=$_POST['TimeStart'];
		$TimeEnd=$_POST['TimeEnd'];
		$RoomVenue=$_POST['Room_Venue'];
		$Othervenue=$_POST['Othervenue'];
		$roomNo = $_POST['roomNo'];
		$ReqName=$_POST['ReqName'];
		$SchoolID=$_POST['SchoolID'];
		$School=$_POST['pili1'];
		$Email= $_POST['Email'];
		$others =$_POST['OtherDept'];
		$offiCe = $_SESSION['office'];
		$uSer = $_SESSION['user'];


		$chk= "SELECT * FROM reservation Where `resDate` = '$resDate' AND `Status` = 'Reserved'";
		$dchk = mysqli_query($con, $chk);
		$user = mysqli_fetch_assoc($dchk);
		$sample=$user['Equipment'];
		$st=str_split($sample,9);
		
		//echo $user['Res_id'];
		//echo $c;

		if($user['Time_Start'] === $TimeStart && $user['Time_End'] === $TimeEnd){
			?>
			<div class="alert alert-primary d-flex align-items-center" role="alert" style = "margin-bottom:0px;">
					  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
					    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
					  </svg>&nbsp;&nbsp;
					  <div>
					  	Reservation did not push through There is a conflict in schedule with the equipment you are reserving. 
					  </div>
					</div>
			<?PHP		
		}

		else if($user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[0] + " " == $st[0] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[1] + " " == $st[1] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[2] + " " == $st[2] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[3] + " " == $st[3] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[4] + " " == $st[4] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[5] + " " == $st[5] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[6] + " " == $st[6] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[7] + " " == $st[7] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[8] + " " == $st[8] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[9] + " " == $st[9] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[10] + " " == $st[10] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[11] + " " == $st[11] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[12] + " " == $st[12] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[13] + " " == $st[13] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[14] + " " == $st[14] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[15] + " " == $st[15] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[16] + " " == $st[16] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[17] + " " == $st[17] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[18] + " " == $st[18]){
			?>
			<div class="alert alert-primary d-flex align-items-center" role="alert" style = "margin-bottom:0px;">
					  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
					    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
					  </svg>&nbsp;&nbsp;
					  <div>
					  	Reservation did not push through There is a conflict in schedule with the equipment you are reserving. 
					  </div>
					</div>
			<?PHP		
		}

		else if($user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[0] + " " == $st[0] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[1] + " " == $st[1] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[2] + " " == $st[2] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[3] + " " == $st[3] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[4] + " " == $st[4] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[5] + " " == $st[5] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[6] + " " == $st[6] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[7] + " " == $st[7] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[8] + " " == $st[8] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[9] + " " == $st[9] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[10] + " " == $st[10] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[11] + " " == $st[11] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[12] + " " == $st[12] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[13] + " " == $st[13] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[14] + " " == $st[14] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[15] + " " == $st[15] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[16] + " " == $st[16] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[17] + " " == $st[17] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[18] + " " == $st[18]){
			?>
			<div class="alert alert-primary d-flex align-items-center" role="alert" style = "margin-bottom:0px;">
					  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
					    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
					  </svg>&nbsp;&nbsp;
					  <div>
					  	Reservation did not push through There is a conflict in schedule with the equipment you are reserving. 
					  </div>
					</div>
			<?PHP		
		}

		else if($user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[0] + " " == $st[0] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[1] + " " == $st[1] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[2] + " " == $st[2] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[3] + " " == $st[3] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[4] + " " == $st[4] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[5] + " " == $st[5] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[6] + " " == $st[6] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[7] + " " == $st[7] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[8] + " " == $st[8] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[9] + " " == $st[9] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[10] + " " == $st[10] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[11] + " " == $st[11] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[12] + " " == $st[12] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[13] + " " == $st[13] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[14] + " " == $st[14] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[15] + " " == $st[15] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[16] + " " == $st[16] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[17] + " " == $st[17] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[18] + " " == $st[18]){
			?>
			<div class="alert alert-primary d-flex align-items-center" role="alert" style = "margin-bottom:0px;">
					  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
					    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
					  </svg>&nbsp;&nbsp;
					  <div>
					  	Reservation did not push through There is a conflict in schedule with the equipment you are reserving. 
					  </div>
					</div>
			<?PHP		
		}

		else if($user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[0] + " " == $st[0] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[1] + " " == $st[1] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[2] + " " == $st[2] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[3] + " " == $st[3] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[4] + " " == $st[4] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[5] + " " == $st[5] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[6] + " " == $st[6] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[7] + " " == $st[7] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[8] + " " == $st[8] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[9] + " " == $st[9] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[10] + " " == $st[10] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[11] + " " == $st[11] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[12] + " " == $st[12] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[13] + " " == $st[13] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[14] + " " == $st[14] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[15] + " " == $st[15] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[16] + " " == $st[16] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[17] + " " == $st[17] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[18] + " " == $st[18]){
			?>
			<div class="alert alert-primary d-flex align-items-center" role="alert" style = "margin-bottom:0px;">
					  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
					    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
					  </svg>&nbsp;&nbsp;
					  <div>
					  	Reservation did not push through There is a conflict in schedule with the equipment you are reserving. 
					  </div>
					</div>
			<?PHP		
		}

		else if($user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[0] + " " == $st[0] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[1] + " " == $st[1] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[2] + " " == $st[2] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[3] + " " == $st[3] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[4] + " " == $st[4] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[5] + " " == $st[5] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[6] + " " == $st[6] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[7] + " " == $st[7] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[8] + " " == $st[8] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[9] + " " == $st[9] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[10] + " " == $st[10] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[11] + " " == $st[11] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[12] + " " == $st[12] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[13] + " " == $st[13] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[14] + " " == $st[14] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[15] + " " == $st[15] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[16] + " " == $st[16] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[17] + " " == $st[17] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[18] + " " == $st[18]){
			?>
			<div class="alert alert-primary d-flex align-items-center" role="alert" style = "margin-bottom:0px;">
					  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
					    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
					  </svg>&nbsp;&nbsp;
					  <div>
					  	Reservation did not push through There is a conflict in schedule with the equipment you are reserving. 
					  </div>
					</div>
			<?PHP		
		}

		else if($Equipment[0] == NULL AND $Equipment[1] == NULL AND $Equipment[2] == NULL AND $Equipment[3] == NULL AND $Equipment[4] == NULL AND $Equipment[5] == NULL AND $Equipment[6] == NULL AND $Equipment[7] == NULL AND $Equipment[8] == NULL AND $Equipment[9] == NULL AND $Equipment[10] == NULL AND $Equipment[11] == NULL AND $Equipment[12] == NULL AND $Equipment[13] == NULL AND $Equipment[14] == NULL AND $Equipment[15] == NULL AND $Equipment[16] == NULL AND $Equipment[17] == NULL AND $Equipment[18] == NULL ){
				?>
			<div class="alert alert-primary d-flex align-items-center" role="alert" style = "margin-bottom:0px;">
					  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
					    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
					  </svg>&nbsp;&nbsp;
					  <div>
					  	Reservation did not push through some equipment is not available on the office selected
					  </div>
					</div>
			<?PHP		
		}

		else{
			date_default_timezone_set('Asia/Manila');
			$t=date('h:i A');

			if($t < date('06:00 PM') OR $t > date('07:00 AM')){
				if($School == "OTHERS"){
					if($RoomVenue != "OTHERS"){
				$qry="INSERT INTO reservation(`nature`,`Purpose`,`Equipment`,`resDate`,`Time_Start`,`Time_End`,`Room_Venue`,`ReqName`,`SchoolID`,`School`,`Email`,`User`,`Office`) VALUES('$a','$b','$c','$resDate','$TimeStart','$TimeEnd','$RoomVenue $roomNo','$ReqName','$SchoolID','$others','$Email','$uSer','$offiCe')";
				mysqli_query($con,$qry);
				header('location: Bypass_Confirm.php');
					}
					else if($RoomVenue == "OTHERS"){
						$qry="INSERT INTO reservation(`nature`,`Purpose`,`Equipment`,`resDate`,`Time_Start`,`Time_End`,`Room_Venue`,`ReqName`,`SchoolID`,`School`,`Email`,`User`,`Office`) VALUES('$a','$b','$c','$resDate','$TimeStart','$TimeEnd','$Othervenue $roomNo','$ReqName','$SchoolID','$others','$Email','$uSer','$offiCe')";
				mysqli_query($con,$qry);
				header('location: Bypass_Confirm.php');
					}
				}
				else{
					if($RoomVenue != "OTHERS"){
					$qry="INSERT INTO reservation(`nature`,`Purpose`,`Equipment`,`resDate`,`Time_Start`,`Time_End`,`Room_Venue`,`ReqName`,`SchoolID`,`School`,`Email`,`User`,`Office`) VALUES('$a','$b','$c','$resDate','$TimeStart','$TimeEnd','$RoomVenue $roomNo','$ReqName','$SchoolID','$School','$Email','$uSer','$offiCe')";
					mysqli_query($con,$qry);
					header('location: Bypass_Confirm.php');
						}
					else if($RoomVenue == "OTHERS"){
						$qry="INSERT INTO reservation(`nature`,`Purpose`,`Equipment`,`resDate`,`Time_Start`,`Time_End`,`Room_Venue`,`ReqName`,`SchoolID`,`School`,`Email`,`User`,`Office`) VALUES('$a','$b','$c','$resDate','$TimeStart','$TimeEnd','$Othervenue $roomNo','$ReqName','$SchoolID','$School','$Email','$uSer','$offiCe')";
				mysqli_query($con,$qry);
				header('location: Bypass_Confirm.php');
					}
				}
			}
			else if($t > date('06:00 PM') OR $t < date('07:00 AM')){

			?>
			<div class="alert alert-primary d-flex align-items-center" role="alert" style = "margin-bottom:0px;">
					  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
					    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
					  </svg>&nbsp;&nbsp;
					  <div>
					  	Reservation did not push through outside office hours.
					    (Office Hours 7:00 AM to 6:00 PM Monday to Saturday)
					  </div>
					</div>
			<?PHP		
			}
			
		}
}

?>
