<?php
//Update June 7 2022 Select query from * to Equip_ID and type. added facility viewing room//
session_start();
include('../Connection/Connection.php');

$officE = $_SESSION['office'];



$qry= "SELECT  `Equip_ID`,`type` FROM `tbl_equipment` WHERE `type` = 'Laptop' AND `Office` LIKE '%$officE%' AND `Stats` = 'Available' ORDER BY rand() limit 1";
$run = mysqli_query($con, $qry);
$row = mysqli_fetch_assoc($run);


$qry1= "SELECT  `Equip_ID`,`type` FROM `tbl_equipment` WHERE `type` = 'Overhead Projector' AND `Office` LIKE '%$officE%' AND `Stats` = 'Available' ORDER BY rand() limit 1";
$run1 = mysqli_query($con, $qry1);
$row1 = mysqli_fetch_assoc($run1);

$qry2= "SELECT  `Equip_ID`,`type` FROM `tbl_equipment` WHERE `type` = 'DLP/LCDProjector' AND `Office` LIKE '%$officE%' AND `Stats` = 'Available' ORDER BY rand() limit 1";
$run2 = mysqli_query($con, $qry2);
$row2 = mysqli_fetch_assoc($run2);

$qry3= "SELECT  `Equip_ID`,`type` FROM `tbl_equipment` WHERE `type` = 'VHSplayer' AND `Office` LIKE '%$officE%' AND `Stats` = 'Available' ORDER BY rand() limit 1";
$run3 = mysqli_query($con, $qry3);
$row3 = mysqli_fetch_assoc($run3);

$qry4= "SELECT  `Equip_ID`,`type` FROM `tbl_equipment` WHERE `type` = 'SoundSystem' AND `Office` LIKE '%$officE%' AND `Stats` = 'Available' ORDER BY rand() limit 1";
$run4 = mysqli_query($con, $qry4);
$row4 = mysqli_fetch_assoc($run4);

$qry5= "SELECT  `Equip_ID`,`type` FROM `tbl_equipment` WHERE `type` = 'DVDplayer' AND `Office` LIKE '%$officE%' AND `Stats` = 'Available' ORDER BY rand() limit 1";
$run5 = mysqli_query($con, $qry5);
$row5 = mysqli_fetch_assoc($run5);

$qry6= "SELECT  `Equip_ID`,`type` FROM `tbl_equipment` WHERE `type` = 'VCDplayer' AND `Office` LIKE '%$officE%' AND `Stats` = 'Available' ORDER BY rand() limit 1";
$run6 = mysqli_query($con, $qry6);
$row6 = mysqli_fetch_assoc($run6);

$qry7= "SELECT  `Equip_ID`,`type` FROM `tbl_equipment` WHERE `type` = 'CDcassettePlayer' AND `Office` LIKE '%$officE%' AND `Stats` = 'Available' ORDER BY rand() limit 1";
$run7 = mysqli_query($con, $qry7);
$row7 = mysqli_fetch_assoc($run7);

$qry8= "SELECT  `Equip_ID`,`type` FROM `tbl_equipment` WHERE `type` = 'Karaoke' AND `Office` LIKE '%$officE%' AND `Stats` = 'Available' ORDER BY rand() limit 1";
$run8 = mysqli_query($con, $qry8);
$row8 = mysqli_fetch_assoc($run8);

$qry9= "SELECT  `Equip_ID`,`type` FROM `tbl_equipment` WHERE `type` = 'Microphone' AND `Office` LIKE '%$officE%' AND `Stats` = 'Available' ORDER BY rand() limit 1";
$run9 = mysqli_query($con, $qry9);
$row9 = mysqli_fetch_assoc($run9);

$qry10= "SELECT  `Equip_ID`,`type` FROM `tbl_equipment` WHERE `type` = 'DocumentCamera' AND `Office` LIKE '%$officE%' AND `Stats` = 'Available' ORDER BY rand() limit 1";
$run10 = mysqli_query($con, $qry10);
$row10 = mysqli_fetch_assoc($run10);

$qry11= "SELECT  `Equip_ID`,`type` FROM `tbl_equipment` WHERE `type` = 'DigitalvideoCamera' AND `Office` LIKE '%$officE%' AND `Stats` = 'Available' ORDER BY rand() limit 1";
$run11 = mysqli_query($con, $qry11);
$row11 = mysqli_fetch_assoc($run11);

$qry12 = "SELECT  `Equip_ID`,`type` FROM `tbl_equipment` WHERE `type` = 'DigitalCamera(still)' AND `Office` LIKE '%$officE%' AND `Stats` = 'Available' ORDER BY rand() limit 1";
$run12 = mysqli_query($con, $qry12);
$row12 = mysqli_fetch_assoc($run12);

$qry13 = "SELECT  `Equip_ID`,`type` FROM `tbl_equipment` WHERE `type` = 'DocumentationVideos' AND `Office` LIKE '%$officE%' AND `Stats` = 'Available' ORDER BY rand() limit 1";
$run13 = mysqli_query($con, $qry13);
$row13 = mysqli_fetch_assoc($run13);

$qry14 = "SELECT  `Equip_ID`,`type` FROM `tbl_equipment` WHERE `type` = 'EducationalVideos' AND `Office` LIKE '%$officE%' AND `Stats` = 'Available' ORDER BY rand() limit 1";
$run14 = mysqli_query($con, $qry14);
$row14 = mysqli_fetch_assoc($run14);

$qry15 = "SELECT  `Equip_ID`,`type` FROM `tbl_equipment` WHERE `type` = 'Music' AND `Office` LIKE '%$officE%' AND `Stats` = 'Available' ORDER BY rand() limit 1";
$run15 = mysqli_query($con, $qry15);
$row15 = mysqli_fetch_assoc($run15);

$qry16 = "SELECT  `Equip_ID`,`type` FROM `tbl_equipment` WHERE `type` = 'HDMIconnector' AND `Office` LIKE '%$officE%' AND `Stats` = 'Available' ORDER BY rand() limit 1";
$run16 = mysqli_query($con, $qry16);
$row16 = mysqli_fetch_assoc($run16);

$qry17 = "SELECT  `Equip_ID`,`type` FROM `tbl_equipment` WHERE `type` = 'VGAconnector' AND `Office` LIKE '%$officE%' AND `Stats` = 'Available' ORDER BY rand() limit 1";
$run17 = mysqli_query($con, $qry17);
$row17 = mysqli_fetch_assoc($run17);

$qry18 = "SELECT  `Equip_ID`,`type` FROM `tbl_equipment` WHERE `type` = 'LightningDigitalAVadapter' AND `Office` LIKE '%$officE%' AND `Stats` = 'Available' ORDER BY rand() limit 1";
$run18 = mysqli_query($con, $qry18);
$row18 = mysqli_fetch_assoc($run18);

$qry19 = "SELECT  `Equip_ID`,`type` FROM `tbl_equipment` WHERE `type` = 'ViewingRoom' AND `Office` LIKE '%$officE%' AND `Stats` = 'Available' ORDER BY rand() limit 1";
$run19 = mysqli_query($con, $qry19);
$row19 = mysqli_fetch_assoc($run19);



?>