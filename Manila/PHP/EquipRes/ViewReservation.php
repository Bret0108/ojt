<?php
//UPDATE June 7 2022 added user and office option//
include('../Connection/Connection.php');

$qry= "SELECT * FROM reservation ORDER BY Res_id DESC LIMIT 1";
$run = mysqli_query($con, $qry);
$row = mysqli_fetch_assoc($run);

$sample=$row['Equipment'];
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



			?>
				<tr>
					<td class="Tracking"><?= $row['Res_id'];?></td>
					<td><?= $row['User'];?></td>
					<td><?= $row['Office'];?></td>
					<td><?= $row['ReqName'];?></td>
					<td><?= $row['SchoolID'];?></td>
					<td><?= $row['School'];?></td>
					<td><?= $row['Email'];?></td>
					<td><?= $row['Room_Venue'];?></td>
					<td><?= $row['nature'];?></td>
					<td><?= $row['Purpose'];?></td>
					<td>
						<?= $sample1;?>
						<?= $sample2;?>
						<?= $sample3;?>
						<?= $sample4;?>
						<?= $sample5;?>
						<?= $sample6;?>
						<?= $sample7;?>
						<?= $sample8;?>
						<?= $sample9;?>
						<?= $sample10;?>
						<?= $sample11;?>
						<?= $sample12;?>
					</td>
					<td><?= $row['resDate'];?></td>
					<td><?= $row['Time_Start'];?></td>
					<td><?= $row['Time_End'];?></td>
				</tr>
			<?php

?>