<?php
  session_start();
  error_reporting(0);
  $userchkr = $_SESSION['Username'];

  if($userchkr == NULL){
      header('location: ../Login.php');
  }

  else{
    
  }

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
      <a href="Admin_home.php" id="Home"> Back</a>
    </div>
    
     <h3 class="contact">Reservation List</h3>
      <div class="containeredP">
      <form action="" method="POST">
         <h5 class="TrackerInstruction">Select Reservation Status</h5>
         <div class="row">
          <div class="col-25">
            <label for="fname">Status</label>
          </div>
          <div class="col-75">
                 <select name="pili">
                 <option  value="COMPLETE">COMPLETE</option>
                 <option  value="RESERVED">RESERVED</option>
                 <option  value="CANCELLED">CANCELLED</option>
                 <option  value="PENDING">PENDING</option>
                 </select>
          </div>

          <div class="col-25">
            <label for="fname">Equipment/Facility</label>
          </div>
          <div class="col-75">
                 <select name="pili1">
                 <option  value="Equipment">Equipment</option>
                 <option  value="Facility">Facility</option>
                 </select>
          </div>

          <div class="rows">
          <input type="submit" name="check" value="Check">
          </div>
      </div>
      </form>
     </div>

     <div class="containeredP">
        <h3 class="label_Confirm">Equipment/Facility</h3>
         <div class="table-responsive">
            <table class = "table table-bordered" >
                <thead>
                  <tr>
                      <th class="tHead">Status</th>
                      <th class="tHead">Reservation Date</th>
                      <th class="tHead">Time Start</th>
                      <th class="tHead">Time End</th>
                      <th class="tHead">Reservation ID</th>
                      <th class="tHead">Name</th>
                       <th class="tHead">School</th>
                      <th class="tHead">Email</th>
                      <th class="tHead">Room/Venue</th>
                      <th class="tHead">Nature</th>
                       <th class="tHead">Purpose</th>
                      <th class="tHead">Equipment/Facility</th>
                      <th class="tHead">Campus</th>
                  <tbody>
                      <?php include('PHP/Admin/Reservation_viewer.php');?>

                  </tbody>
                  </tr>
                </thead>
            </table>
          </div>
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