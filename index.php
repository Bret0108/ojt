<?php
// LAST EDIT ADDED SCHOOL ID COLUMN ON WHOLE SYSTEM MAY 26 2022/Updated Phone Screen Compatibility//
//Updated june 11 2022 removed facility reservation option//
    error_reporting (E_ALL ^ E_NOTICE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>CEUTLTD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="vendor/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link href="vendor/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="resource/css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"/>
</head>

<body>
  <header id="home">
  <div class="container-fluid navcon">
    <div class="container">
      <nav class="navbar navbar-dark pt-md-5 mb-5">
        <div class="row">
        <h5 class=" mt-2 ml-2">
            <span id="Ceu">CEU</span>
            <span id="Tltd">Teaching and Learning Technology Department</span>
        </h5>
      </nav>

      <div id="mySidenav" class="sidenav">
      <a href="Forms.php" id="Home"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-earmark" viewBox="0 0 16 16">
      <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
      </svg>&nbsp;&nbsp; Forms</a>
        <a href="Login.php" id="AboutUs"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" color="white" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>&nbsp;&nbsp;Login</a>
        <a href="Tracker_reservation.php" id="ContactUs"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>&nbsp; Tracking</a>
      </div>
    </div>
  </div>
  <div class="containers">
  <div class="jumbotron jumbotron-fluid header-text">
      <div class="container">
        <h1 class="headermain">
          <span class="Reservetxt">Need To Present?</span> 
          <br/>
          <span class="Heretxt">We got you!</span>
        </h1>
        <a href="redirect.php" class="btn btn-ghost">Reserve Now</a>
      </div>
  </div>
  </div>
  </header>



 
  <script src="resource/js/script.js"></script>
  <script src="vendor/js/jquery.js"></script>
  <script src="vendor/js/popper.js"></script>
  <script src="vendor/js/bootstrap.min.js"></script>
</body>

</html>
