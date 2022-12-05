<?php
  //UPDATE June 7 2022 Added User and Office option//
   include('PHP/EquipRes/Bypass_insertRes.php');
  include('PHP/EquipRes/Cancel_Res.php');
?>

<!doctype html>
<html lang="en">
  <head>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="vendor/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="resource/css/Equip_Res_Confirm.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"/>
  <title>CEU TLTD</title>
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
      <a href="Admin_home.php" id="Home"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" color="white" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>&nbsp;&nbsp; Home</a>
    </div>

    <div class="containered">
        <h3 class="label_Confirm">Equipment Reservation Confirmation</h3>
        <div class="table-responsive">
            <table class = "table table-bordered">
                <thead>
                  <tr>
                      <th class="tHead">Reservation ID:</th>
                      <th class="tHead">User</th>
                      <th class="tHead">Location</th>
                      <th class="tHead">Name</th>
                      <th class="tHead">School ID</th>
                      <th class="tHead">School</th>
                      <th class="tHead">Email</th>
                      <th class="tHead">Room/Venue</th>
                      <th class="tHead">Nature</th>
                      <th class="tHead">Purpose</th>
                      <th class="tHead">Equipment</th>
                      <th class="tHead">Date</th>
                      <th class="tHead">Time Start</th>
                      <th class="tHead">Time End</th>
                    

                  <tbody>
                      <?php include('PHP/EquipRes/ViewReservation.php');?>
                  </tbody>
                  </tr>
                </thead>
            </table>
        </div>
        <div Style = "color: white; background-color: green; margin-left: 400px; margin-right:400px; margin-bottom:20px; margin-top:20px">
        <?php include('PHP/EquipRes/Confirm_Res.php'); ?>
      </div>
    <div id="cons">
    <a class='btn btn-danger'  href='Bypass_Reservation.php? id="<?= $row['Res_id'];?>"'>Cancel</a>
    <a class='btn btn-success' href='Bypass_Confirm.php? name="<?= $row['Res_id'];?>"'>Confirm
    </a>
    </div>

   

  </header> 


  </body>
</html>
