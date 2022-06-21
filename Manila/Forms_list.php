<?php
//Update June 12 2022 Added Created forms list page, created form viewer for repair and evaluation form//
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
      <a href="Admin_home.php" id="Home">Back</a>
      <a href="../EquipmentRepairRequestForm.php" id="Pending">Repair</a>
    </div>

    
    
     <h3 class="contact">Submitted Forms</h3>
      <div class="containeredP">
      <form action="" method="POST">
         <h5 class="TrackerInstruction">Search Forms</h5>
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
            <label for="subject">Year</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="Year" value="" name="pili3" required placeholder="Year">
          </div>
          <div class="col-25">
            <label for="subject">Name</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="NAmes" value="" name="Naamee" required placeholder="Name">
          </div>

           <div class="col-25">
            <label for="fname">Form type</label>
          </div>
          <div class="col-75">
                 <select name="pili1" id = "vidtitle" onchange="VidTitle()">
                <option  value=" ">Select</option>
                 <option  value="instructional">Instructional video evaluation form</option>
                 <option  value="Repair">Equipment repair request form</option>
                 </select>
          </div>

          <div class="col-25" name="hidden-label" id="hidden-label">
            <label for="fname">Video Title</label>
          </div>
          <div class="col-75" name="hidden-panel" id="hidden-panel">
                 <input class="form-control" name="Vid" type="text" placeholder="Video Title">
          </div>

            <div class="col-25" name="hidden-label1" id="hidden-label1">
            <label for="fname">Action Taken</label>
          </div>
          <div class="col-75" name="hidden-panel1" id="hidden-panel1">
                 <select name="pili6" id = "ActionT">
                <option  value=" ">Select</option>
                 <option  value="In-house">In-house</option>
                 <option  value="Outside">Outside</option>
                 </select>
          </div>

        </div>
          <div class="rows">
          <input type="submit" name="check" value="View record">
          </div>
      </div>
      </form>
     </div>

     <div class="containeredP">
        <div class="table-responsive">
       <?php include('PHP/Admin/Form_viewer.php');?>
      </div>
    </div>


  </header>

 
  <script src="resource/js/script.js"></script>
  <script src="vendor/js/jquery.js"></script>
  <script src="vendor/js/popper.js"></script>
  <script src="vendor/js/bootstrap.min.js"></script>
  
  </body>
</html>