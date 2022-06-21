<?php
    error_reporting (E_ALL ^ E_NOTICE);
?>

<!doctype html>
<html lang="en">
  <head>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="vendor/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="resource/css/style.css">
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

    <div id="mySidenav1" class="sidenav">
      <a href="index.php" id="Homes"> Back</a>
    </div>
    
   <h3 class="contact">Reservation tracker</h3>
    <div class="containered">
      <form action="" method="GET">
         <h5 class="TrackerInstruction">Type in your Reservation ID to view your reservation</h5>
        <div class="row">
          <div class="col-25">
            <label for="fname">Reservation ID</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="fname" name="Res_id" placeholder=" " required>
          </div>
        </div>
          <div class="rows">
          <input type="submit" name="sub" value="Track">
          </div>
      </form>
    
    <div class="table-responsive">
            <table class = "table table-bordered" >
                <thead>
                  <tr>
                      <th class="tHead">Reservation ID</th>
                      <th class="tHead">Status</th>
                      <th class="tHead">Name</th>
                      <th class="tHead">School</th>
                      <th class="tHead">Date</th>
                      <th class="tHead">Time Start</th>
                      <th class="tHead">Time End</th>
                      <th class="tHead">Equipment</th>
                      <th class="tHead">Email</th>
                      <th class="tHead">Room/Venue</th>
                  <tbody>
                      <?php include('PHP/Res_Tracker.php');?>
                  </tbody>
                  </tr>
                </thead>
            </table>
        </div>
      </div>
  </header>
 

   
  <script src="resource/js/script.js"></script>
  <script src="vendor/js/jquery.js"></script>
  <script src="vendor/js/popper.js"></script>
  <script src="vendor/js/bootstrap.min.js"></script>
  
  </body>
</html>