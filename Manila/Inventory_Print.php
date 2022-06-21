<?php
//June 08 2022 Update created print option//
//Updated June 09 2022 Added category option//
  session_start();
  include('../Connection/Connection.php');
  error_reporting(0);
  $userchkr = $_SESSION['Username'];
  $tYpe = $_SESSION['tYpe'];
  $option = $_SESSION['option'];
  $Opis = $_SESSION['Opis'];

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
    <link rel="stylesheet" type="text/css" href="resource/css/print.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"/>
  <title>CEU Teaching and Learning Technology Department</title>
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
    
         


     <div class="containeredP" style="width: 100%; margin-left:0px;">
      <h4>CENTRO ESCOLAR UNIVERSITY<br> Manila * Makati * Malolos<br> Teaching and Learning Technology Department</h4>
       <a class="btn btn-secondary" href=" " id="Home" style="float: left; margin-bottom:10px;" onclick="window.print();">Print</a>
       <a class="btn btn-secondary" href="Inventory_List.php" id="Home" style="float: right; margin-bottom:10px;">Back</a>
        <h3 class="label_Confirm">Inventory</h3>
         <div class="table-responsive" style="width:100%; font-size:11px;">
            <table class = "table table-bordered">
                <thead>
                  <tr>
                      <th class="tHead">Equipment Tag</th>
                      <th class="tHead">type</th>
                      <th class="tHead">Brand Name</th>
                      <th class="tHead">Model</th>
                      <th class="tHead">information</th>
                      <th class="tHead">Status</th>
                      <th class="tHead">Purchase Date</th>
                      <th class="tHead">Condemn Date</th>
                      <th class="tHead">Location</th>
                  <tbody>
                    <?php

                      $qry= "SELECT * FROM `tbl_equipment` WHERE `type` = '$tYpe' AND `Stats` = '$option' OR `type` = '$tYpe' AND `Office` = '$Opis'";
                      $run = mysqli_query($con, $qry);

                      if(mysqli_num_rows($run) > 0){
                              foreach($run as $row){

                                  ?>
                                    <tr>
                                      <td><?= $row['Tag'];?></td>
                                      <td><?= $row['type'];?></td>
                                      <td><?= $row['name'];?></td>
                                      <td><?= $row['MODel'];?></td>
                                      <td><?= $row['information'];?></td>
                                      <td><?= $row['Stats'];?></td>
                                      <td><?= $row['Purchase Date'];?></td>
                                      <td><?= $row['Condemn Date'];?></td>
                                      <td><?= $row['Office'];?></td>
                                    </tr>
                                  <?php
                  
                              }
                      }
                      ?>
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