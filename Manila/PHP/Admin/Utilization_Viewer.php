<?PHP
session_start();
//Update June 9 2022 Created utilization viewer//
//Update June 11 2022 Updated utilization viewer added sum function for total number of times the equipments where used, added office choice option//
//Update June 15 2022 Changed utilization count to daily instead of per reservation//
include('../Connection/Connection.php');

if(isset($_POST['check'])){

	$Choice1 = $_POST['ofFice'];
	$Choice2 = $_POST['pili2'];
	$Choice3 = $_POST['pili3'];
	$_SESSION['choicE1'] = $Choice1;
	$_SESSION['choicE2'] = $Choice2;
	$_SESSION['choicE3'] = $Choice3;


		$qry= "SELECT `resDate`,`ReqName`,`Equipment`,`School`,`Office` FROM `reservation` WHERE `Office`='$Choice1' AND monthname(`resDate`)='$Choice2' AND year(`resDate`) = '$Choice3' AND `Status` = 'COMPLETED' ORDER BY `Res_id` DESC";
		$run = mysqli_query($con, $qry);
		
		if(mysqli_num_rows($run) > 0){
			foreach($run as $row){

					$slot1 = 0;
					$slot2 = 0;
					$slot3 = 0;
					$slot4 = 0;
					$slot5 = 0;
					$slot6 = 0;
					$slot7 = 0;
					$slot8 = 0;
					$slot9 = 0;
					$slot10 = 0;
					$slot11 = 0;
					$slot12 = 0;

				$sample=$row['Equipment'];
				$name =$row['ReqName'];
				$Dept =$row['School'];
				$res =$row['resDate'];
				$off =$row['Office'];

				$st=str_split($sample,9);

				$wry1 = "SELECT `type` FROM tbl_equipment WHERE `Equip_ID` = '$st[0]'";
				$run1 = mysqli_query($con, $wry1);
				$row1 = mysqli_fetch_assoc($run1);

				$sample1=$row1['type'];


				$wry2 = "SELECT `type` FROM tbl_equipment WHERE `Equip_ID` = '$st[1]'";
				$run2 = mysqli_query($con, $wry2);
				$row2 = mysqli_fetch_assoc($run2);

				$sample2=$row2['type'];
				


				$wry3= "SELECT `type` FROM tbl_equipment WHERE `Equip_ID` = '$st[2]'";
				$run3 = mysqli_query($con, $wry3);
				$row3 = mysqli_fetch_assoc($run3);

				$sample3=$row3['type'];


				$wry4 = "SELECT `type` FROM tbl_equipment WHERE `Equip_ID` = '$st[3]'";
				$run4 = mysqli_query($con, $wry4);
				$row4 = mysqli_fetch_assoc($run4);

				$sample4=$row4['type'];
				

				$wry5 = "SELECT `type` FROM tbl_equipment WHERE `Equip_ID` = '$st[4]'";
				$run5 = mysqli_query($con, $wry5);
				$row5 = mysqli_fetch_assoc($run5);

				$sample5=$row5['type'];
				

				$wry6 = "SELECT `type` FROM tbl_equipment WHERE `Equip_ID` = '$st[5]'";
				$run6 = mysqli_query($con, $wry6);
				$row6 = mysqli_fetch_assoc($run6);

				$sample6=$row6['type'];
				

				$wry7 = "SELECT `type` FROM tbl_equipment WHERE `Equip_ID` = '$st[6]'";
				$run7 = mysqli_query($con, $wry7);
				$row7 = mysqli_fetch_assoc($run7);

				$sample7=$row7['type'];
				
				$wry8 = "SELECT `type` FROM tbl_equipment WHERE `Equip_ID` = '$st[7]'";
				$run8 = mysqli_query($con, $wry8);
				$row8 = mysqli_fetch_assoc($run8);

				$sample8=$row8['type'];
				

				$wry9 = "SELECT `type` FROM tbl_equipment WHERE `Equip_ID` = '$st[8]'";
				$run9 = mysqli_query($con, $wry9);
				$row9 = mysqli_fetch_assoc($run9);

				$sample9=$row9['type'];
				

				$wry10 = "SELECT `type` FROM tbl_equipment WHERE `Equip_ID` = '$st[9]'";
				$run10 = mysqli_query($con, $wry10);
				$row10 = mysqli_fetch_assoc($run10);

				$sample10=$row10['type'];
				

				$wry11 = "SELECT `type` FROM tbl_equipment WHERE `Equip_ID` = '$st[10]'";
				$run11 = mysqli_query($con, $wry11);
				$row11 = mysqli_fetch_assoc($run11);

				$sample11=$row11['type'];
				

				$wry12 = "SELECT `type` FROM tbl_equipment WHERE `Equip_ID` = '$st[11]'";
				$run12 = mysqli_query($con, $wry12);
				$row12 = mysqli_fetch_assoc($run12);

				$sample12=$row12['type'];
				

				if($sample1 == "Laptop" OR $sample2 == "Laptop" OR $sample3 == "Laptop" OR $sample4 == "Laptop" OR $sample5 == "Laptop" OR $sample6 == "Laptop" OR $sample7 == "Laptop" OR $sample8 == "Laptop" OR $sample9 == "Laptop" OR $sample10 == "Laptop" OR $sample11 == "Laptop" OR $sample12 == "Laptop"){
					$slot1 = 1;
				}
				if($sample1 == "Overhead Projector" OR $sample2 == "Overhead Projector" OR $sample3 == "Overhead Projector" OR $sample4 == "Overhead Projector" OR $sample5 == "Overhead Projector" OR $sample6 == "Overhead Projector" OR $sample7 == "Overhead Projector" OR $sample8 == "Overhead Projector" OR $sample9 == "Overhead Projector" OR $sample10 == "Overhead Projector" OR $sample11 == "Overhead Projector" OR $sample12 == "Overhead Projector"){
					$slot2 = 1;
				}

				if($sample1 == "Microphone" OR $sample2 == "Microphone" OR $sample3 == "Microphone" OR $sample4 == "Microphone" OR $sample5 == "Microphone" OR $sample6 == "Microphone" OR $sample7 == "Microphone" OR $sample8 == "Microphone" OR $sample9 == "Microphone" OR $sample10 == "Microphone" OR $sample11 == "Microphone" OR $sample12 == "Microphone"){
					$slot3 = 1;
				}

				if($sample1 == "DLP/LCDProjector" OR $sample2 == "DLP/LCDProjector" OR $sample3 == "DLP/LCDProjector" OR $sample4 == "DLP/LCDProjector" OR $sample5 == "DLP/LCDProjector" OR $sample6 == "DLP/LCDProjector" OR $sample7 == "DLP/LCDProjector" OR $sample8 == "DLP/LCDProjector" OR $sample9 == "DLP/LCDProjector" OR $sample10 == "DLP/LCDProjector" OR $sample11 == "DLP/LCDProjector" OR $sample12 == "DLP/LCDProjector"){
					$slot4 = 1;
				}

				if($sample1 == "VHSplayer" OR $sample2 == "VHSplayer" OR $sample3 == "VHSplayer" OR $sample4 == "VHSplayer" OR $sample5 == "VHSplayer" OR $sample6 == "VHSplayer" OR $sample7 == "VHSplayer" OR $sample8 == "VHSplayer" OR $sample9 == "VHSplayer" OR $sample10 == "VHSplayer" OR $sample11 == "VHSplayer" OR $sample12 == "VHSplayer"){
					$slot5 = 1;
				}

				if($sample1 == "SoundSystem" OR $sample2 == "SoundSystem" OR $sample3 == "SoundSystem" OR $sample4 == "SoundSystem" OR $sample5 == "SoundSystem" OR $sample6 == "SoundSystem" OR $sample7 == "SoundSystem" OR $sample8 == "SoundSystem" OR $sample9 == "SoundSystem" OR $sample10 == "SoundSystem" OR $sample11 == "SoundSystem" OR $sample12 == "SoundSystem"){
					$slot6 = 1;
				}

				if($sample1 == "DVDplayer" OR $sample2 == "DVDplayer" OR $sample3 == "DVDplayer" OR $sample4 == "DVDplayer" OR $sample5 == "DVDplayer" OR $sample6 == "DVDplayer" OR $sample7 == "DVDplayer" OR $sample8 == "DVDplayer" OR $sample9 == "DVDplayer" OR $sample10 == "DVDplayer" OR $sample11 == "DVDplayer" OR $sample12 == "DVDplayer"){
					$slot7 = 1;
				}

				if($sample1 == "VCDplayer" OR $sample2 == "VCDplayer" OR $sample3 == "VCDplayer" OR $sample4 == "VCDplayer" OR $sample5 == "VCDplayer" OR $sample6 == "VCDplayer" OR $sample7 == "VCDplayer" OR $sample8 == "VCDplayer" OR $sample9 == "VCDplayer" OR $sample10 == "VCDplayer" OR $sample11 == "VCDplayer" OR $sample12 == "VCDplayer"){
					$slot8 = 1;
				}

				if($sample1 == "CDcassettePlayer" OR $sample2 == "CDcassettePlayer" OR $sample3 == "CDcassettePlayer" OR $sample4 == "CDcassettePlayer" OR $sample5 == "CDcassettePlayer" OR $sample6 == "CDcassettePlayer" OR $sample7 == "CDcassettePlayer" OR $sample8 == "CDcassettePlayer" OR $sample9 == "CDcassettePlayer" OR $sample10 == "CDcassettePlayer" OR $sample11 == "CDcassettePlayer" OR $sample12 == "CDcassettePlayer"){
					$slot9 = 1;
				}

				if($sample1 == "Karaoke" OR $sample2 == "Karaoke" OR $sample3 == "Karaoke" OR $sample4 == "Karaoke" OR $sample5 == "Karaoke" OR $sample6 == "Karaoke" OR $sample7 == "Karaoke" OR $sample8 == "Karaoke" OR $sample9 == "Karaoke" OR $sample10 == "Karaoke" OR $sample11 == "Karaoke" OR $sample12 == "Karaoke"){
					$slot10 = 1;
				}

				if($sample1 == "DocumentCamera" OR $sample2 == "DocumentCamera" OR $sample3 == "DocumentCamera" OR $sample4 == "DocumentCamera" OR $sample5 == "DocumentCamera" OR $sample6 == "DocumentCamera" OR $sample7 == "DocumentCamera" OR $sample8 == "DocumentCamera" OR $sample9 == "DocumentCamera" OR $sample10 == "DocumentCamera" OR $sample11 == "DocumentCamera" OR $sample12 == "DocumentCamera"){
					$slot11 = 1;
				}

				if($sample1 == "DigitalvideoCamera" OR $sample2 == "DigitalvideoCamera" OR $sample3 == "DigitalvideoCamera" OR $sample4 == "DigitalvideoCamera" OR $sample5 == "DigitalvideoCamera" OR $sample6 == "DigitalvideoCamera" OR $sample7 == "DigitalvideoCamera" OR $sample8 == "DigitalvideoCamera" OR $sample9 == "DigitalvideoCamera" OR $sample10 == "DigitalvideoCamera" OR $sample11 == "DigitalvideoCamera" OR $sample12 == "DigitalvideoCamera"){
					$slot12 = 1;
				}

				if($sample1 == "DigitalCamera(still)" OR $sample2 == "DigitalCamera(still)" OR $sample3 == "DigitalCamera(still)" OR $sample4 == "DigitalCamera(still)" OR $sample5 == "DigitalCamera(still)" OR $sample6 == "DigitalCamera(still)" OR $sample7 == "DigitalCamera(still)" OR $sample8 == "DigitalCamera(still)" OR $sample9 == "DigitalCamera(still)" OR $sample10 == "DigitalCamera(still)" OR $sample11 == "DigitalCamera(still)" OR $sample12 == "DigitalCamera(still)"){
					$slot13 = 1;
				}

				if($sample1 == "DocumentationVideos" OR $sample2 == "DocumentationVideos" OR $sample3 == "DocumentationVideos" OR $sample4 == "DocumentationVideos" OR $sample5 == "DocumentationVideos" OR $sample6 == "DocumentationVideos" OR $sample7 == "DocumentationVideos" OR $sample8 == "DocumentationVideos" OR $sample9 == "DocumentationVideos" OR $sample10 == "DocumentationVideos" OR $sample11 == "DocumentationVideos" OR $sample12 == "DocumentationVideos"){
					$slot14 = 1;
				}

				if($sample1 == "EducationalVideos" OR $sample2 == "EducationalVideos" OR $sample3 == "EducationalVideos" OR $sample4 == "EducationalVideos" OR $sample5 == "EducationalVideos" OR $sample6 == "EducationalVideos" OR $sample7 == "EducationalVideos" OR $sample8 == "EducationalVideos" OR $sample9 == "EducationalVideos" OR $sample10 == "EducationalVideos" OR $sample11 == "EducationalVideos" OR $sample12 == "EducationalVideos"){
					$slot15 = 1;
				}

				if($sample1 == "Music" OR $sample2 == "Music" OR $sample3 == "Music" OR $sample4 == "Music" OR $sample5 == "Music" OR $sample6 == "Music" OR $sample7 == "Music" OR $sample8 == "Music" OR $sample9 == "Music" OR $sample10 == "Music" OR $sample11 == "Music" OR $sample12 == "Music"){
					$slot16 = 1;
				}

				if($sample1 == "HDMIconnector" OR $sample2 == "HDMIconnector" OR $sample3 == "HDMIconnector" OR $sample4 == "HDMIconnector" OR $sample5 == "HDMIconnector" OR $sample6 == "HDMIconnector" OR $sample7 == "HDMIconnector" OR $sample8 == "HDMIconnector" OR $sample9 == "HDMIconnector" OR $sample10 == "HDMIconnector" OR $sample11 == "HDMIconnector" OR $sample12 == "HDMIconnector"){
					$slot17 = 1;
				}

				if($sample1 == "VGAconnector" OR $sample2 == "VGAconnector" OR $sample3 == "VGAconnector" OR $sample4 == "VGAconnector" OR $sample5 == "VGAconnector" OR $sample6 == "VGAconnector" OR $sample7 == "VGAconnector" OR $sample8 == "VGAconnector" OR $sample9 == "VGAconnector" OR $sample10 == "VGAconnector" OR $sample11 == "VGAconnector" OR $sample12 == "VGAconnector"){
					$slot18 = 1;
				}

				if($sample1 == "LightningDigitalAVadapter" OR $sample2 == "LightningDigitalAVadapter" OR $sample3 == "LightningDigitalAVadapter" OR $sample4 == "LightningDigitalAVadapter" OR $sample5 == "LightningDigitalAVadapter" OR $sample6 == "LightningDigitalAVadapter" OR $sample7 == "LightningDigitalAVadapter" OR $sample8 == "LightningDigitalAVadapter" OR $sample9 == "LightningDigitalAVadapter" OR $sample10 == "LightningDigitalAVadapter" OR $sample11 == "LightningDigitalAVadapter" OR $sample12 == "LightningDigitalAVadapter"){
					$slot19 = 1;
				}

				if($sample1 == "ViewingRoom" OR $sample2 == "ViewingRoom" OR $sample3 == "ViewingRoom" OR $sample4 == "ViewingRoom" OR $sample5 == "ViewingRoom" OR $sample6 == "ViewingRoom" OR $sample7 == "ViewingRoom" OR $sample8 == "ViewingRoom" OR $sample9 == "ViewingRoom" OR $sample10 == "ViewingRoom" OR $sample11 == "ViewingRoom" OR $sample12 == "ViewingRoom"){
					$slot20 = 1;
				}

					$qRy="INSERT IGNORE INTO utilization(`r_day`,`Name`,`Department`,`Officearea`,`Laptop`,`Overhead Projector`,`Microphone`,`DLP/LCDProjector`,`VHSplayer`,`SoundSystem`,`DVDplayer`,`VCDplayer`,`CDcassettePlayer`,`Karaoke`,`DocumentCamera`,`DigitalvideoCamera`,`DigitalCamera(still)`,`DocumentationVideos`,`EducationalVideos`,`Music`,`HDMIconnector`,`VGAconnector`,`LightningDigitalAVadapter`,`ViewingRoom`) VALUES('$res','$name','$Dept','$off','$slot1','$slot2','$slot3','$slot4','$slot5','$slot6','$slot7','$slot8','$slot9','$slot10','$slot11','$slot12','$slot13','$slot14','$slot15','$slot16','$slot17','$slot18','$slot19','$slot20')";
				$rUn = mysqli_query($con, $qRy);


			}	
		}



			$qrY= "SELECT Name, Department, Officearea, SUM(`Laptop`) AS 'V_Laptop',SUM(`Overhead Projector`) AS 'V_Overhead Projector' ,SUM(`Microphone`) AS 'V_Microphone',SUM(`DLP/LCDProjector`) AS 'V_DLP/LCDProjector' ,SUM(`VHSplayer`) AS 'V_VHSplayer' ,SUM(`SoundSystem`) AS 'V_SoundSystem' ,SUM(`DVDplayer`) AS 'V_DVDplayer' ,SUM(`VCDplayer`) AS 'V_VCDplayer' ,SUM(`CDcassettePlayer`) AS 'V_CDcassettePlayer' ,SUM(`Karaoke`) AS 'V_Karaoke',SUM(`DocumentCamera`) AS 'V_DocumentCamera' ,SUM(`DigitalvideoCamera`) AS 'V_DigitalvideoCamera' ,SUM(`DigitalCamera(still)`) AS 'V_DigitalCamera(still)' ,SUM(`DocumentationVideos`) AS 'V_DocumentationVideos' ,SUM(`EducationalVideos`) AS 'V_EducationalVideos' ,SUM(`Music`) AS 'V_Music' ,SUM(`HDMIconnector`) AS 'V_HDMIconnector' ,SUM(`VGAconnector`) AS 'V_VGAconnector' ,SUM(`LightningDigitalAVadapter`) AS 'V_LightningDigitalAVadapter' ,SUM(`ViewingRoom`) AS 'V_ViewingRoom' FROM utilization WHERE `Officearea` = '$Choice1' AND monthname(`r_day`)='$Choice2' GROUP BY Name, Officearea  DESC";
			$ruN = mysqli_query($con, $qrY);
		
			if(mysqli_num_rows($ruN) > 0){
				foreach($ruN as $roW){



				?>
					<tr>
						<td><?= $roW['Officearea'];?></td>
						<td><?= $roW['Name'];?></td>
						<td><?= $roW['Department'];?></td>
						<td><?= $roW['V_Laptop'];?></td>
						<td><?= $roW['V_Overhead Projector'];?></td>
						<td><?= $roW['V_Microphone'];?></td>
						<td><?= $roW['V_DLP/LCDProjector'];?></td>
						<td><?= $roW['V_VHSplayer'];?></td>
						<td><?= $roW['V_SoundSystem'];?></td>
						<td><?= $roW['V_DVDplayer'];?></td>
						<td><?= $roW['V_VCDplayer'];?></td>
						<td><?= $roW['V_CDcassettePlayer'];?></td>
						<td><?= $roW['V_Karaoke'];?></td>
						<td><?= $roW['V_DocumentCamera'];?></td>
						<td><?= $roW['V_DigitalvideoCamera'];?></td>
						<td><?= $roW['V_DigitalCamera(still)'];?></td>
						<td><?= $roW['V_DocumentationVideos'];?></td>
						<td><?= $roW['V_EducationalVideos'];?></td>
						<td><?= $roW['V_Music'];?></td>
						<td><?= $roW['V_HDMIconnector'];?></td>
						<td><?= $roW['V_VGAconnector'];?></td>
						<td><?= $roW['V_LightningDigitalAVadapter'];?></td>
						<td><?= $roW['V_ViewingRoom'];?></td>
					</tr>
				<?php
				}
			}

			$qrY= "SELECT Officearea, SUM(`Laptop`) AS 'V_Laptop',SUM(`Overhead Projector`) AS 'V_Overhead Projector' ,SUM(`Microphone`) AS 'V_Microphone',SUM(`DLP/LCDProjector`) AS 'V_DLP/LCDProjector' ,SUM(`VHSplayer`) AS 'V_VHSplayer' ,SUM(`SoundSystem`) AS 'V_SoundSystem' ,SUM(`DVDplayer`) AS 'V_DVDplayer' ,SUM(`VCDplayer`) AS 'V_VCDplayer' ,SUM(`CDcassettePlayer`) AS 'V_CDcassettePlayer' ,SUM(`Karaoke`) AS 'V_Karaoke',SUM(`DocumentCamera`) AS 'V_DocumentCamera' ,SUM(`DigitalvideoCamera`) AS 'V_DigitalvideoCamera' ,SUM(`DigitalCamera(still)`) AS 'V_DigitalCamera(still)' ,SUM(`DocumentationVideos`) AS 'V_DocumentationVideos' ,SUM(`EducationalVideos`) AS 'V_EducationalVideos' ,SUM(`Music`) AS 'V_Music' ,SUM(`HDMIconnector`) AS 'V_HDMIconnector' ,SUM(`VGAconnector`) AS 'V_VGAconnector' ,SUM(`LightningDigitalAVadapter`) AS 'V_LightningDigitalAVadapter' ,SUM(`ViewingRoom`) AS 'V_ViewingRoom' FROM utilization WHERE `Officearea` = '$Choice1' AND monthname(`r_day`)='$Choice2' GROUP BY Laptop  DESC";
			$ruN = mysqli_query($con, $qrY);
		
			if(mysqli_num_rows($ruN) > 0){
				foreach($ruN as $roW){



				?>
					<tr>
						<td> </td>
						<td>TOTAL:</td>
						<td> </td>
						<td><?= $roW['V_Laptop'];?></td>
						<td><?= $roW['V_Overhead Projector'];?></td>
						<td><?= $roW['V_Microphone'];?></td>
						<td><?= $roW['V_DLP/LCDProjector'];?></td>
						<td><?= $roW['V_VHSplayer'];?></td>
						<td><?= $roW['V_SoundSystem'];?></td>
						<td><?= $roW['V_DVDplayer'];?></td>
						<td><?= $roW['V_VCDplayer'];?></td>
						<td><?= $roW['V_CDcassettePlayer'];?></td>
						<td><?= $roW['V_Karaoke'];?></td>
						<td><?= $roW['V_DocumentCamera'];?></td>
						<td><?= $roW['V_DigitalvideoCamera'];?></td>
						<td><?= $roW['V_DigitalCamera(still)'];?></td>
						<td><?= $roW['V_DocumentationVideos'];?></td>
						<td><?= $roW['V_EducationalVideos'];?></td>
						<td><?= $roW['V_Music'];?></td>
						<td><?= $roW['V_HDMIconnector'];?></td>
						<td><?= $roW['V_VGAconnector'];?></td>
						<td><?= $roW['V_LightningDigitalAVadapter'];?></td>
						<td><?= $roW['V_ViewingRoom'];?></td>
					</tr>
				<?php
				}
			}
}

?>