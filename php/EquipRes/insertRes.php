<?php
include('Connection/Connection.php');
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
		$ReqName=$_POST['ReqName'];
		$School=$_POST['School'];
		$Email=$_POST['Email'];


		$chk= "SELECT * FROM reservation Where `resDate` = '$resDate' AND `Status` = 'Reserved'";
		$dchk = mysqli_query($con, $chk);
		$user = mysqli_fetch_assoc($dchk);
		$sample=$user['Equipment'];
		$st=str_split($sample,9);
		
		//echo $user['Res_id'];
		//echo $c;

//LAST EDIT MO DITO PRE

		if($user['Time_Start'] === $TimeStart && $user['Time_End'] === $TimeEnd){
			echo "<h5 style='color:white; background-color:red; padding:10px; margin-bottom:0:'>There is a conflict in schedule with the equipment you are reserving</h5>";
		}

		else if($user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[0] + " " == $st[0] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[1] + " " == $st[1] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[2] + " " == $st[2] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[3] + " " == $st[3] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[4] + " " == $st[4] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[5] + " " == $st[5] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[6] + " " == $st[6] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[7] + " " == $st[7] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[8] + " " == $st[8] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[9] + " " == $st[9] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[10] + " " == $st[10] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[11] + " " == $st[11] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[12] + " " == $st[12] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[13] + " " == $st[13] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[14] + " " == $st[14] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[15] + " " == $st[15] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[16] + " " == $st[16] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[17] + " " == $st[17] ||$user['Time_Start'] < $TimeStart && $user['Time_End'] > $TimeEnd && $Equipment[18] + " " == $st[18]){
			echo "<h5 style='color:white; background-color:red; padding:10px; margin-bottom:0:'>There is a conflict in schedule with the equipment you are reserving</h5>";
		}

		else if($user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[0] + " " == $st[0] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[1] + " " == $st[1] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[2] + " " == $st[2] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[3] + " " == $st[3] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[4] + " " == $st[4] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[5] + " " == $st[5] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[6] + " " == $st[6] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[7] + " " == $st[7] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[8] + " " == $st[8] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[9] + " " == $st[9] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[10] + " " == $st[10] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[11] + " " == $st[11] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[12] + " " == $st[12] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[13] + " " == $st[13] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[14] + " " == $st[14] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[15] + " " == $st[15] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[16] + " " == $st[16] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[17] + " " == $st[17] || $user['Time_Start'] > $TimeStart && $user['Time_End'] < $TimeEnd && $Equipment[18] + " " == $st[18]){
			echo "<h5 style='color:white; background-color:red; padding:10px; margin-bottom:0:'>There is a conflict in schedule with the equipment you are reserving</h5>";
		}

		else if($user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[0] + " " == $st[0] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[1] + " " == $st[1] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[2] + " " == $st[2] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[3] + " " == $st[3] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[4] + " " == $st[4] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[5] + " " == $st[5] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[6] + " " == $st[6] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[7] + " " == $st[7] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[8] + " " == $st[8] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[9] + " " == $st[9] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[10] + " " == $st[10] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[11] + " " == $st[11] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[12] + " " == $st[12] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[13] + " " == $st[13] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[14] + " " == $st[14] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[15] + " " == $st[15] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[16] + " " == $st[16] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[17] + " " == $st[17] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] < $TimeEnd && $Equipment[18] + " " == $st[18]){
			echo "<h5 style='color:white; background-color:red; padding:10px; margin-bottom:0:'>There is a conflict in schedule with the equipment you are reserving</h5>";
		}

		else if($user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[0] + " " == $st[0] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[1] + " " == $st[1] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[2] + " " == $st[2] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[3] + " " == $st[3] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[4] + " " == $st[4] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[5] + " " == $st[5] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[6] + " " == $st[6] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[7] + " " == $st[7] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[8] + " " == $st[8] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[9] + " " == $st[9] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[10] + " " == $st[10] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[11] + " " == $st[11] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[12] + " " == $st[12] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[13] + " " == $st[13] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[14] + " " == $st[14] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[15] + " " == $st[15] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[16] + " " == $st[16] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[17] + " " == $st[17] || $user['Time_Start'] > $TimeStart && $user['Time_Start'] <= $TimeEnd && $Equipment[18] + " " == $st[18]){
			echo "<h5 style='color:white; background-color:red; padding:10px; margin-bottom:0:'>There is a conflict in schedule with the equipment you are reserving</h5>";
		}

		else if($user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[0] + " " == $st[0] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[1] + " " == $st[1] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[2] + " " == $st[2] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[3] + " " == $st[3] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[4] + " " == $st[4] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[5] + " " == $st[5] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[6] + " " == $st[6] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[7] + " " == $st[7] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[8] + " " == $st[8] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[9] + " " == $st[9] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[10] + " " == $st[10] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[11] + " " == $st[11] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[12] + " " == $st[12] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[13] + " " == $st[13] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[14] + " " == $st[14] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[15] + " " == $st[15] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[16] + " " == $st[16] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[17] + " " == $st[17] || $user['Time_End'] > $TimeStart && $user['Time_End'] <= $TimeEnd && $Equipment[18] + " " == $st[18]){
			echo "<h5 style='color:white; background-color:red; padding:10px; margin-bottom:0:'>There is a conflict in schedule with the equipment you are reserving</h5>";
		}

		else{
			$qry="INSERT INTO reservation(`nature`,`Purpose`,`Equipment`,`resDate`,`Time_Start`,`Time_End`,`Room_Venue`,`ReqName`,`School`,`Email`) VALUES('$a','$b','$c','$resDate','$TimeStart','$TimeEnd','$RoomVenue','$ReqName','$School','$Email')";
			mysqli_query($con,$qry);
			header('location: Equip_Res_Confirmation.php');
			//echo "booked";
		}
}

?>
