<?php
require __DIR__ . '/../../../config.php';
session_start();
//Update June 11 2022 Created excel option added office choice option//

$con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");  
$output = '';
$Total = 'Total';
$blank = ' ';

$Choice1 = $_SESSION['choicE1'];
$Choice2 = $_SESSION['choicE2'];
$Choice3 = $_SESSION['choicE3'];

if(isset($_POST['export_excel'])){
		$qrY= "SELECT Name, Department, SUM(`Laptop`) AS 'V_Laptop',SUM(`Overhead Projector`) AS 'V_Overhead Projector' ,SUM(`Microphone`) AS 'V_Microphone',SUM(`DLP/LCDProjector`) AS 'V_DLP/LCDProjector' ,SUM(`VHSplayer`) AS 'V_VHSplayer' ,SUM(`SoundSystem`) AS 'V_SoundSystem' ,SUM(`DVDplayer`) AS 'V_DVDplayer' ,SUM(`VCDplayer`) AS 'V_VCDplayer' ,SUM(`CDcassettePlayer`) AS 'V_CDcassettePlayer' ,SUM(`Karaoke`) AS 'V_Karaoke',SUM(`DocumentCamera`) AS 'V_DocumentCamera' ,SUM(`DigitalvideoCamera`) AS 'V_DigitalvideoCamera' ,SUM(`DigitalCamera(still)`) AS 'V_DigitalCamera(still)' ,SUM(`DocumentationVideos`) AS 'V_DocumentationVideos' ,SUM(`EducationalVideos`) AS 'V_EducationalVideos' ,SUM(`Music`) AS 'V_Music' ,SUM(`HDMIconnector`) AS 'V_HDMIconnector' ,SUM(`VGAconnector`) AS 'V_VGAconnector' ,SUM(`LightningDigitalAVadapter`) AS 'V_LightningDigitalAVadapter' ,SUM(`ViewingRoom`) AS 'V_ViewingRoom' FROM utilization WHERE `Officearea` = '$Choice1' AND monthname(`r_day`)='$Choice2'  GROUP BY Name";
			$ruN = mysqli_query($con, $qrY);
			$output .= '
			<h4>CENTRO ESCOLAR UNIVERSITY<br> Manila * Makati * Malolos<br> Teaching and Learning Technology Department</h4>
			<table class = "table" bordered="1">
			 <tr>
			 			<th class="tHead">'.$Choice1.'</th>
						<th class="tHead">'.$Choice2.'</th>
            <th class="tHead">'.$Choice3.'</th>
			</tr>
			</table>
			';
			
			if(mysqli_num_rows($ruN) > 0){

				$output .= '
					<table class = "table" bordered="1">
                  <tr>
                      <th class="tHead">Name</th>
                      <th class="tHead">Dept</th>
                      <th class="tHead">Laptop</th>
                      <th class="tHead">Overhead Projector</th>
                      <th class="tHead">Microphone</th>
                      <th class="tHead">DLP/LCDProjector</th>
                      <th class="tHead">VHSplayer</th>
                      <th class="tHead">SoundSystem</th>
                      <th class="tHead">DVDplayer</th>
                      <th class="tHead">VCDplayer</th>
                      <th class="tHead">CDcassettePlayer</th>
                      <th class="tHead">Karaoke</th>
                      <th class="tHead">DocumentCamera</th>
                      <th class="tHead">DigitalvideoCamera</th>
                      <th class="tHead">DigitalCamera(still)</th>
                      <th class="tHead">DocumentationVideos</th>
                      <th class="tHead">EducationalVideos</th>
                      <th class="tHead">Music</th>
                      <th class="tHead">HDMIconnector</th>
                      <th class="tHead">VGAconnector</th>
                      <th class="tHead">LightningDigitalAVadapter</th>
                      <th class="tHead">ViewingRoom</th>
                  </tr>
				';
				foreach($ruN as $roW){

					$output .='
					<tr>
						<td>'.$roW['Name'].'</td>
						<td>'.$roW['Department'].'</td>
						<td>'.$roW['V_Laptop'].'</td>
						<td>'.$roW['V_Overhead Projector'].'</td>
						<td>'.$roW['V_Microphone'].'</td>
						<td>'.$roW['V_DLP/LCDProjector'].'</td>
						<td>'.$roW['V_VHSplayer'].'</td>
						<td>'.$roW['V_SoundSystem'].'</td>
						<td>'.$roW['V_DVDplayer'].'</td>
						<td>'.$roW['V_VCDplayer'].'</td>
						<td>'.$roW['V_CDcassettePlayer'].'</td>
						<td>'.$roW['V_Karaoke'].'</td>
						<td>'.$roW['V_DocumentCamera'].'</td>
						<td>'.$roW['V_DigitalvideoCamera'].'</td>
						<td>'.$roW['V_DigitalCamera(still)'].'</td>
						<td>'.$roW['V_DocumentationVideos'].'</td>
						<td>'.$roW['V_EducationalVideos'].'</td>
						<td>'.$roW['V_Music'].'</td>
						<td>'.$roW['V_HDMIconnector'].'</td>
						<td>'.$roW['V_VGAconnector'].'</td>
						<td>'.$roW['V_LightningDigitalAVadapter'].'</td>
						<td>'.$roW['V_ViewingRoom'].'</td>
					</tr>
				';
				}
				$output .='</table>';
			}

			$qrY= "SELECT SUM(`Laptop`) AS 'V_Laptop',SUM(`Overhead Projector`) AS 'V_Overhead Projector' ,SUM(`Microphone`) AS 'V_Microphone',SUM(`DLP/LCDProjector`) AS 'V_DLP/LCDProjector' ,SUM(`VHSplayer`) AS 'V_VHSplayer' ,SUM(`SoundSystem`) AS 'V_SoundSystem' ,SUM(`DVDplayer`) AS 'V_DVDplayer' ,SUM(`VCDplayer`) AS 'V_VCDplayer' ,SUM(`CDcassettePlayer`) AS 'V_CDcassettePlayer' ,SUM(`Karaoke`) AS 'V_Karaoke',SUM(`DocumentCamera`) AS 'V_DocumentCamera' ,SUM(`DigitalvideoCamera`) AS 'V_DigitalvideoCamera' ,SUM(`DigitalCamera(still)`) AS 'V_DigitalCamera(still)' ,SUM(`DocumentationVideos`) AS 'V_DocumentationVideos' ,SUM(`EducationalVideos`) AS 'V_EducationalVideos' ,SUM(`Music`) AS 'V_Music' ,SUM(`HDMIconnector`) AS 'V_HDMIconnector' ,SUM(`VGAconnector`) AS 'V_VGAconnector' ,SUM(`LightningDigitalAVadapter`) AS 'V_LightningDigitalAVadapter' ,SUM(`ViewingRoom`) AS 'V_ViewingRoom' FROM utilization WHERE `Officearea` = '$Choice1' AND monthname(`r_day`)='$Choice2' GROUP BY Laptop";
			$ruN = mysqli_query($con, $qrY);
		
			if(mysqli_num_rows($ruN) > 0){

					$output .= '
					<table class = "table" bordered="1">
                  <tr>
                      <th class="tHead"></th>
                      <th class="tHead"></th>
                      <th class="tHead"></th>
                      <th class="tHead"></th>
                      <th class="tHead"></th>
                      <th class="tHead"></th>
                      <th class="tHead"></th>
                      <th class="tHead"></th>
                      <th class="tHead"></th>
                      <th class="tHead"></th>
                      <th class="tHead"></th>
                      <th class="tHead"></th>
                      <th class="tHead"></th>
                      <th class="tHead"></th>
                      <th class="tHead"></th>
                      <th class="tHead"></th>
                      <th class="tHead"></th>
                      <th class="tHead"></th>
                      <th class="tHead"></th>
                      <th class="tHead"></th>
                      <th class="tHead"></th>
                      <th class="tHead"></th>
                  </tr>
				';
				foreach($ruN as $roW){
					$output .='
					<tr>
						<td>'.$Total.'</td>
						<td>'.$blank.'</td>
						<td>'.$roW['V_Laptop'].'</td>
						<td>'.$roW['V_Overhead Projector'].'</td>
						<td>'.$roW['V_Microphone'].'</td>
						<td>'.$roW['V_DLP/LCDProjector'].'</td>
						<td>'.$roW['V_VHSplayer'].'</td>
						<td>'.$roW['V_SoundSystem'].'</td>
						<td>'.$roW['V_DVDplayer'].'</td>
						<td>'.$roW['V_VCDplayer'].'</td>
						<td>'.$roW['V_CDcassettePlayer'].'</td>
						<td>'.$roW['V_Karaoke'].'</td>
						<td>'.$roW['V_DocumentCamera'].'</td>
						<td>'.$roW['V_DigitalvideoCamera'].'</td>
						<td>'.$roW['V_DigitalCamera(still)'].'</td>
						<td>'.$roW['V_DocumentationVideos'].'</td>
						<td>'.$roW['V_EducationalVideos'].'</td>
						<td>'.$roW['V_Music'].'</td>
						<td>'.$roW['V_HDMIconnector'].'</td>
						<td>'.$roW['V_VGAconnector'].'</td>
						<td>'.$roW['V_LightningDigitalAVadapter'].'</td>
						<td>'.$roW['V_ViewingRoom'].'</td>
					</tr>
				';
				}
				$output .='</table>';
				header("Content-Type: application/xls");
				header("Content-Disposition:attachment; filename = $Choice1.xls");
				echo $output;
			}
}




?>
