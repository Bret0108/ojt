<?php
//LAST EDIT MAY 31 2022 Updated tables//
//LAST EDIT June 2 2022 Added Search bar for searching ongoing and reserved reservations//
//Update June 9 2022 Changed table values, Added User and Office Column, Updated Equipment Tag value, added Print option//
//Updated June 12 2022 Added Form tab//
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

    <h3 class="contact" id="contact">Search for Reservation</h3>
    
    <div class="containeredP">
      <h3 class="label_Confirm">Search Reservation</h3> 
      <form action="" method="GET">
         <h5 class="TrackerInstruction">Type in Reservation ID</h5>
        <div class="row">
          <div class="col-25">
            <label for="fname">Reservation ID</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="Iny" name="Iny" placeholder=" ">
          </div>
        </div>
          <div class="rows" style="margin-bottom: 10px;">
          <input type="submit" name="search" value="Search">
          </div>
      </form> 
        <div class="table-responsive">
            <table class = "table table-bordered">
                <thead>
                  <tr>
                      <th class="tHead">Action</th>
                      <th class="tHead">Reservation ID</th>
                      <th class="tHead">Equipment</th> 
                      <th class="tHead">Date</th>
                      <th class="tHead">Time Start</th>
                      <th class="tHead">Time End</th>
                  <tbody>
                       <?php include('PHP/Admin/Admin_Confirm.php');?>
                       <?php include('PHP/Admin/Admin_Cancel.php'); ?>
                      <?php include('PHP/Admin/Admin_TodayRes.php');?>
                  </tbody>
                  </tr>
                </thead>
            </table>
          </div>
          <div class="rows" style="margin-top: 10px;">
            <a class="btn btn-success" href="Reservation_Print.php" role="button">PRINT</a>
          </div>
        </div>

      <div class="containeredP">
       <h3 class="label_Confirm">TLTD PASS</h3> 
      <form action="" method="POST">
         <h5 class="TrackerInstruction">Type in TLTD pass no.</h5>
        <div class="row">
           <div class="col-25">
                  <label for="fname">Location</label>
                </div>
                  <div class="col-75">
                       <select name="LoCatIon" id ="office">
                       <option  value=" ">Select</option>
                       <option  value="TLTD_MAIN">TLTD_MAIN</option>
                       <option  value="DENT_SCI">DENT_SCI</option>
                       <option  value="LAH_SUB_CENTER">LAH_SUB_CENTER</option>
                      </select>
                </div>
          <div class="col-25">
            <label for="fname">Pass No.</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text"  name="Pass" placeholder=" ">
          </div>
        </div>
          <div class="rows" style="margin-bottom: 10px;">
          <input type="submit" name="search1" value="Search">
          </div>
      </form> 
        <div class="table-responsive">
            <table class = "table table-bordered" >
                <thead>
                  <tr>
                      <th class="tHead">Action</th>
                      <th class="tHead">Pass Number</th>
                      <th class="tHead">Reservation ID</th>
                      <th class="tHead">Equipment</th>
                      <th class="tHead">Return Time</th>
                  <tbody>
                    
                      <?php include('PHP/Admin/Admin_OngoingRes.php');?>
                  </tbody>
                  </tr>
                </thead>
            </table>
  </div>
  </header>


  <section class="Pending" id="pending">
    <div class="containeredP">
    <h3 class="label_Confirm">Search Reservation</h3> 
        <form action="" method="GET">
          <h5 class="TrackerInstruction">Type in Reservation ID</h5>
          <div class="row">
            <div class="col-25">
              <label for="fname">Reservation ID</label>
            </div>
            <div class="col-75">
              <input class="form-control" type="text" id="Iny" name="pend" placeholder=" ">
            </div>
          </div>
            <div class="rows" style="margin-bottom: 10px;">
            <input type="submit" name="searchpend" value="Search">
            </div>
        </form> 

      <div class="containeredP">
        <h3 class="label_Confirm">Pending Reservation </h3>
         <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                      <th class="tHead">Action</th>
                      <th class="tHead">Reservation ID</th>
                      <th class="tHead">Equipment</th> 
                      <th class="tHead">Date</th>
                      <th class="tHead">Time Start</th>
                      <th class="tHead">Time End</th>
                  <tbody>
                      <?php include('PHP/Admin/Admin_pending.php');?>

                  </tbody>
                  </tr>
                </thead>
            </table>
          </div>
        </div>
      </div>

  </section>

  <section class="Inventory" id="inventory">
      <h3 class="contact">Reservation Checker</h3>
      <div class="containeredP">
      <form action="" method="GET">
         <h5 class="TrackerInstruction">Type in Reservation ID</h5>
        <div class="row">
          <div class="col-25">
            <label for="fname">Reservation ID</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="Iny" name="Iny" placeholder=" ">
          </div>
        </div>
          <div class="rows">
          <input type="submit" name="check" value="Check">
          </div>
      </form>
    </div>

    <div class="containeredP">
        <h3 class="label_Confirm">Reservation checker</h3>
         <div class="table-responsive">
            <table class = "table table-bordered" >
                <thead>
                  <tr>
                      <th class="tHead">Equipment Tag</th>
                      <th class="tHead">Reservation ID</th>
                      <th class="tHead">Reservation Status</th>
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
      <a href="Bypass_UserCheck.php" id="Home">Reserve</a>
      <a href="Reservation_List.php" id="Pending">Records</a>
      <a href="Inventory_List.php" id="Inventory">Inventory</a>
      <a href="Admin_Access.php" id="Access">Access</a>
      <a href="Forms_list.php" id="Forms">Forms</a>
      <a href="../Logout.php" id="Logout">Logout</a>
    </div>
 

  
  <script src="resource/js/Equip_Res.js"></script>
  <script src="vendor/js/jquery.js"></script>
  <script src="vendor/js/popper.js"></script>
  <script src="vendor/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  
  </body>
</html>