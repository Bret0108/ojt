<?php

include('../Connection/Connection.php');




$qry= "SELECT  * FROM `tbl_facilities` WHERE `type` = 'Sofia De Veyra Room'";
$run = mysqli_query($con, $qry);
$row = mysqli_fetch_assoc($run);


$qry1= "SELECT  * FROM `tbl_facilities` WHERE `type` = 'LAH seminar Room 1'";
$run1 = mysqli_query($con, $qry1);
$row1 = mysqli_fetch_assoc($run1);

$qry2= "SELECT  * FROM `tbl_facilities` WHERE `type` = 'LAH Seminar Room 2'";
$run2 = mysqli_query($con, $qry2);
$row2 = mysqli_fetch_assoc($run2);

$qry3= "SELECT  * FROM `tbl_facilities` WHERE `type` = 'LAH Seminar Room 3'";
$run3 = mysqli_query($con, $qry3);
$row3 = mysqli_fetch_assoc($run3);

$qry4= "SELECT  * FROM `tbl_facilities` WHERE `type` = 'Student Activity Center'";
$run4 = mysqli_query($con, $qry4);
$row4 = mysqli_fetch_assoc($run4);

$qry5= "SELECT  * FROM `tbl_facilities` WHERE `type` = 'North Quadrangle'";
$run5 = mysqli_query($con, $qry5);
$row5 = mysqli_fetch_assoc($run5);

$qry6= "SELECT  * FROM `tbl_facilities` WHERE `type` = 'Tech Center'";
$run6 = mysqli_query($con, $qry6);
$row6 = mysqli_fetch_assoc($run6);

?>