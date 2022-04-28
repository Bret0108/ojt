<?php
    require_once 'php/init.php';
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
      <a href="#home" id="Home"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" color="white" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>&nbsp;&nbsp; Home</a>
        <a href="#gallery" id="Gallery"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" color="white" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>&nbsp;&nbsp; Gallery</a>
        <a href="Login.php" id="AboutUs"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" color="white" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>&nbsp;&nbsp;Login</a>
        <a href="#contactus" id="ContactUs"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" color="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>&nbsp; Message us</a>
      </div>
    </div>
  </div>
  <div class="containers">
  <div class="jumbotron jumbotron-fluid header-text">
      <div class="container">
        <h1 class="headermain">
          <span class="Reservetxt">Make Reservations</span> 
          <br/>
          <span class="Heretxt">Here</span>
        </h1>
        <a href="Equipment_Campus.php" class="btn btn-ghost">Equipment</a>
        <a href="Facility_Reservation.php" class="btn btn-ghost">Facilities</a>
      </div>
  </div>
  </div>
  </header>

  
  

  <section class="section4" id="reviews">
  <?php   waiterI();?>
   <?php viewTableI(); ?>
 </section>

  <section class="section3" id="contactus">
    <h3 class="contact">Contact Us</h3>
    <div class="containered">
      <form action="#reviews" method="GET">
        <div class="row">
          <div class="col-25">
            <label for="fname">Name</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="fname" name="name" placeholder="Your name.." required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="subject">Review</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="subject" name="review" placeholder="Write something here.." style="height:200px"></input>
          </div>
        </div>
        <div class="rows">
          <a class ="btn review-btn"  href="testimonial.php">Reviews</a>
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md">
          <p class="ft2">
            CTTO for pictures, For educational Purposes Only<br/>&nbsp;&nbsp;&nbsp;
            all rights reserve 2021<br/>&nbsp;&nbsp;&nbsp;
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
