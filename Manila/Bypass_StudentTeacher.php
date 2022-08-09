<?php
include('../Connection/Connection.php');
session_start();


if(isset($_POST['Ctnue'])){
	$user=$_POST['useR'];
	$office=$_POST['ofFice'];
	$_SESSION['user'] = $user;
    $_SESSION['office'] = $office;
    header('location: Bypass_Reservation.php');
} 


?>