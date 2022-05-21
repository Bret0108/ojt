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

    <h3 class="contact" id="contact">Scheduled Reservations today</h3>
    
    <div class="containeredP">
      <h3 class="label_Confirm">Today's Reservation</h3>  
        <div class="table-responsive">
            <table class = "table table-bordered" >
                <thead>
                  <tr>
                      <th class="tHead">Action</th>
                      <th class="tHead">Reservation ID</th>
                      <th class="tHead">Name</th>
                      <th class="tHead">School</th>
                      <th class="tHead">Email</th>
                      <th class="tHead">Room/Venue</th>
                      <th class="tHead">Nature</th>
                      <th class="tHead">Purpose</th>
                      <th class="tHead">Equipment/Facility ID</th> 
                      <th class="tHead">Date</th>
                      <th class="tHead">Time Start</th>
                      <th class="tHead">Time End</th>
                      <th class="tHead">Status</th>
                      <th class="tHead">Campus</th>
                  <tbody>
                       <?php include('PHP/Admin/Admin_Confirm.php');?>
                       <?php include('PHP/Admin/Admin_Cancel.php'); ?>
                      <?php include('PHP/Admin/Admin_TodayRes.php');?>

                  </tbody>
                  </tr>
                </thead>
            </table>
          </div>


      <h3 class="label_Confirm">Ongoing Reservations</h3>  
        <div class="table-responsive">
            <table class = "table table-bordered" >
                <thead>
                  <tr>
                      <th class="tHead">Action</th>
                      <th class="tHead">Reservation ID</th>
                      <th class="tHead">Name</th>
                      <th class="tHead">School</th>
                      <th class="tHead">Email</th>
                      <th class="tHead">Room/Venue</th>
                      <th class="tHead">Nature</th>
                      <th class="tHead">Purpose</th>
                      <th class="tHead">Equipment/Facility ID</th>
                      <th class="tHead">Date</th>
                      <th class="tHead">Time Start</th>
                      <th class="tHead">Time End</th>
                      <th class="tHead">Status</th>
                      <th class="tHead">Campus</th>
                  <tbody>
                    
                      <?php include('PHP/Admin/Admin_OngoingRes.php');?>
                  </tbody>
                  </tr>
                </thead>
            </table>
    </div>
    <a class="btn btn-success" style="margin-top: 10px; width:100px; font-size: 15px;" href="Reservation_List.php">Reservation<br> list</a>

  </header>

  <section class="Pending" id="pending">
      <h3 class="contact">Pending Reservation request</h3>

      <div class="containeredP">
        <h3 class="label_Confirm">Pending Reservation </h3>
         <div class="table-responsive">
            <table class = "table table-bordered" >
                <thead>
                  <tr>
                      <th class="tHead">Action</th>
                      <th class="tHead">Reservation ID</th>
                      <th class="tHead">Name</th>
                      <th class="tHead">School</th>
                      <th class="tHead">Email</th>
                      <th class="tHead">Room/Venue</th>
                      <th class="tHead">Nature</th>
                      <th class="tHead">Purpose</th>
                      <th class="tHead">Equipment/Facility ID</th>
                      <th class="tHead">type</th>
                      <th class="tHead">Date</th>
                      <th class="tHead">Time Start</th>
                      <th class="tHead">Time End</th>
                      <th class="tHead">Status</th>
                      <th class="tHead">Campus</th>
                  <tbody>
                      <?php include('PHP/Admin/Admin_pending.php');?>

                  </tbody>
                  </tr>
                </thead>
            </table>
          </div>
        </div>

  </section>

  <section class="Inventory" id="inventory">
      <h3 class="contact">Inventory</h3>
      <div class="containeredP">
      <form action="" method="GET">
         <h5 class="TrackerInstruction">Type in Equipment/Facility ID</h5>
        <div class="row">
          <div class="col-25">
            <label for="fname">Equipment/Facility ID</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="Iny" name="Iny" placeholder=" ">
          </div>
        </div>
          <div class="rows">
          <input type="submit" name="check" value="Check">
          </div>
      </form>
      <a class="btn btn-success" style="margin-top: 10px; width:100px; font-size: 15px;" href="Inventory_List.php">Inventory<br> list</a>
    </div>

    <div class="containeredP">
        <h3 class="label_Confirm">Equipment/Facility Reservation checker</h3>
         <div class="table-responsive">
            <table class = "table table-bordered" >
                <thead>
                  <tr>
                      <th class="tHead">Equipment/Facility ID/</th>
                      <th class="tHead">Equipment/Facility Name</th>
                      <th class="tHead">Equipment/Facility type</th>
                      <th class="tHead">Equipment/Facility Info</th>
                      <th class="tHead">Site</th>
                      <th class="tHead">Reservation ID</th>
                      <th class="tHead">Reservation Date</th>
                      <th class="tHead">Time Start</th>
                      <th class="tHead">Time End</th>
                  <tbody>
                      <?php include('PHP/Admin/Admin_Inventory.php');?>

                  </tbody>
                  </tr>
                </thead>
            </table>
          </div>
    </div>



  </section>

  <div id="mySidenav" class="sidenav">
      <a href="#contact" id="Home">Home</a>
      <a href="#pending" id="Pending">Pending</a>
      <a href="#inventory" id="Inventory">Inventory</a>
      <a href="../Logout.php" id="Logout">Logout</a>
    </div>
 

  
  <script src="resource/js/Equip_Res.js"></script>
  <script src="vendor/js/jquery.js"></script>
  <script src="vendor/js/popper.js"></script>
  <script src="vendor/js/bootstrap.min.js"></script>
  
  </body>
</html>