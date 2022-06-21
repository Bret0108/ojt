<?php
  //Last Edit May 31 2022//
  //Updated June 9 2022 Removed Equipment/Facility option in search form//
//Updated June 11 2022 Added reservation office option//
  session_start();
  error_reporting(0);
  include('../Connection/Connection.php');
  $userchkr = $_SESSION['Username'];

  $ALA = "SELECT * FROM admin_login WHERE `Username` = '$userchkr'";
  $ac = mysqli_query($con, $ALA);
  $Access = mysqli_fetch_assoc($ac);
  $pasok = $Access['Root'];

  if($userchkr == NULL){
      header('location: ../Login.php');
  }

  else if($pasok == 'YES'){
      
  }

  else{
    header('location: ../Manila/Admin_home.php');
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
      <a href="Admin_home.php" id="Home">Back</a>
    </div>
    
     <h3 class="contact">Utilization Equipment/Facility/Instructional Materials</h3>
      <div class="containeredP">
      <form action="" method="POST">
         <h5 class="TrackerInstruction">Search Reservation</h5>
         <div class="row">
           <div class="col-25">
            <label for="fname">Month</label>
          </div>
          <div class="col-75">
                 <select name="pili2">
                <option  value=" ">Select</option>
                 <option  value="January">January</option>
                 <option  value="Febuary">Febuary</option>
                 <option  value="March">March</option>
                 <option  value="April">April</option>
                 <option  value="May">May</option>
                 <option  value="June">June</option>
                 <option  value="July">July</option>
                 <option  value="August">August</option>
                 <option  value="September">September</option>
                 <option  value="October">October</option>
                 <option  value="November">November</option>
                 <option  value="December">December</option>
                 </select>
          </div>
      <div class="col-25">
            <label for="fname">Reservation Office</label>
          </div>
            <div class="col-75">
                 <select name="ofFice" id ="office">
                 <option  value=" ">Select</option>
                 <option  value="TLTD_MAIN">TLTD_MAIN</option>
                 <option  value="DENT_SCI">DENT_SCI</option>
                 <option  value="LAH_SUB_CENTER">LAH_SUB_CENTER</option>
                </select>
          </div>

          <div class="col-25">
            <label for="subject">Year</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="Year" value="" name="pili3" required placeholder="Year">
          </div>

        </div>
          <div class="rows">
          <input type="submit" name="check" value="View record">
          </div>
      </div>
      </form>
     </div>

     <div class="containeredP">
        <h3 id = "view" class="label_Confirm">Utilization of Equipment</h3>
        <div class="rows" style="margin-bottom: 10px;">
            <form action="PHP/Admin/excel.php" method="POST">
            <button type="submit" name="export_excel" class="btn btn-success">Export to excel</button>
            </form>
          </div>
         <div class="table-responsive">
            <table class = "table table-bordered" >
                <thead>
                  <tr>
                      <th class="tHead">Location</th>
                      <th class="tHead">Name</th>
                      <th class="tHead">Dept</th>
                      <th class="tHead">Laptop</th>
                      <th class="tHead">Overhead Projector</th>
                      <th class="tHead">Microphone</th>
                      <th class="tHead">DLP/LCDProjector</th>
                      <th class="tHead">VHSplayer</th>
                      <th class="tHead">SoundSystem</th>
                      <th class="tHead">DVDplayer</th>
                      <th class="tHead">VCDplayer</th>
                      <th class="tHead">CDcassettePlayer</th>
                      <th class="tHead">Karaoke</th>
                      <th class="tHead">DocumentCamera</th>
                      <th class="tHead">DigitalvideoCamera</th>
                      <th class="tHead">DigitalCamera(still)</th>
                      <th class="tHead">DocumentationVideos</th>
                      <th class="tHead">EducationalVideos</th>
                      <th class="tHead">Music</th>
                      <th class="tHead">HDMIconnector</th>
                      <th class="tHead">VGAconnector</th>
                      <th class="tHead">LightningDigitalAVadapter</th>
                      <th class="tHead">ViewingRoom</th>
                  <tbody>
                      <?php include('PHP/Admin/Utilization_Viewer.php');?>

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