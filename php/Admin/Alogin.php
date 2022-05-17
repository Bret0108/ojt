<?php
session_start();
include('Connection/Connection.php');

// initializing variables
$username = "";
$password = "";
$errors = array(); 
 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    
    $query = "SELECT * FROM `admin_login` WHERE `Username` ='$username' AND `Password`='$password'";
    $results = mysqli_query($con, $query);
    if (mysqli_num_rows($results) == 1) {
      header('location: Admin_home.php');
    }else {
        array_push($errors, "Wrong username/password combination");
        
    }
  }
}

?>
