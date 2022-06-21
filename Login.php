<?php include('PHP/Admin/Alogin.php')

?>

<!doctype html>
<html lang="en">
  <head>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="vendor/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="resource/css/Login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"/>
  <title>CEUTLTD</title>
  </head>
  <body>
    <header class="bahay">
    <div class="container-fluid navcon">
    <div class="container hakdog">
      <nav class="navbar navbar-dark pt-md-5">
        <div class="row">
          <h5 class=" mt-2 ml-2">
            <span id="Ceu">CEU</span>
            <span id="Tltd">Teaching and Learning Technology Department</span>
          </h5>
        </div>
      </nav>
    </div>
    </div>

    <div id="mySidenav" class="sidenav">
      <a href="index.php" id="Home"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/></svg>&nbsp;&nbsp;Back</a>
    </div>
    
    <div class="containered">
      <h5 class="ad_logTxt">Admin Login</h5>
      <form action="Login.php" method="POST" >
          <?php include('PHP/errors.php'); ?>
        <div class="row">
          <div class="col-25">
            <label for="fname">Username</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="fname" name="username" placeholder="Username" required></input>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="subject">Password</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="password" id="subject" name="password" placeholder="Password" style="height:50px" required></input>
          </div>
        </div>
        <div class="rows">
          <input type="submit" value="Submit" name="login_user">
        </div>
      </form>
    </div>
  </header>
 

   <footer>
    <div class="container">
      <div class="row">
        <div class="col-md">
          <p class="ft2">
            Sample for OJT Project purposes<br/>&nbsp;&nbsp;&nbsp;
            all rights reserve 2022<br/>&nbsp;&nbsp;&nbsp;
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-twitter-square"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-youtube"></i>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <script src="resource/js/script.js"></script>
  <script src="vendor/js/jquery.js"></script>
  <script src="vendor/js/popper.js"></script>
  <script src="vendor/js/bootstrap.min.js"></script>
  
  </body>
</html>