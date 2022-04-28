<?php
session_start();

// initializing variables
$username = "";
$password = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect("localhost","root","","tltd");
 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    
    $query = "SELECT * FROM `admin_login` WHERE `Username` ='$username' AND `Password`='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['Username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: Admin_home.php');
    }else {
        array_push($errors, "Wrong username/password combination");
        
    }
  }
}

?>
