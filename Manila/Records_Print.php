<?php
//June 08 2022 Update created print option//
//June 12 2022 Updated Equipment type query added print title centro escolar university//
  session_start();
  include('../Connection/Connection.php');
  error_reporting(0);
  $userchkr = $_SESSION['Username'];
  $statS =  $_SESSION['statS'];
  $moNth = $_SESSION['moNth'];
  $yEar =  $_SESSION['yEar'];
  $Neym =  $_SESSION['Neym'];

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
       <a class="btn btn-secondary" href="Reservation_List.php" id="Home" style="float: right; margin-bottom:10px;">Back</a>
        <h3 class="label_Confirm">Records</h3>
         <div class="table-responsive" style="width:100%; font-size:10.5px;">
            <table class = "table table-bordered">
                <thead>
                  <tr>
                      <th class="tHead">Status</th>
                      <th class="tHead">Reserve ID</th>
                      <th class="tHead">User</th>
                      <th class="tHead">Office</th>
                      <th class="tHead">Reserved Date</th>
                      <th class="tHead">Time Start</th>
                      <th class="tHead">Time End</th>
                      <th class="tHead">Equipment type</th>
                      <th class="tHead">Name</th>
                      <th class="tHead">School</th>
                      <th class="tHead">Room/Venue</th>
                  <tbody>
                    <?php
                      $Cqry= "SELECT * FROM `reservation` WHERE `Status` LIKE '%$statS%' AND `resDate` = '$Neym' OR `Status` LIKE '%$statS%' AND monthname(`resDate`) LIKE '$moNth' AND year(`resDate`) LIKE '$yEar' ORDER BY `Res_id` DESC";
                      $Crun = mysqli_query($con, $Cqry);

                      if(mysqli_num_rows($Crun) > 0){
                        foreach($Crun as $row){

                          $sample=$row['Equipment'];
                          $st=str_split($sample,9);

                          $wry1 = "SELECT `type` FROM tbl_equipment WHERE `Equip_ID` = '$st[0]'";
                          $run1 = mysqli_query($con, $wry1);
                          $row1 = mysqli_fetch_assoc($run1);

                          $sample1=$row1['type'];
                         

                          $wry2 = "SELECT `type` FROM tbl_equipment WHERE `Equip_ID` = '$st[1]'";
                          $run2 = mysqli_query($con, $wry2);
                          $row2 = mysqli_fetch_assoc($run2);

                          $sample2=$row2['type'];
                          

                          $wry3= "SELECT `type` FROM tbl_equipment WHERE `Equip_ID` = '$st[2]'";
                          $run3 = mysqli_query($con, $wry3);
                          $row3 = mysqli_fetch_assoc($run3);

                          $sample3=$row3['type'];
                        

                          $wry4 = "SELECT `type` FROM tbl_equipment WHERE `Equip_ID` = '$st[3]'";
                          $run4 = mysqli_query($con, $wry4);
                          $row4 = mysqli_fetch_assoc($run4);

                          $sample4=$row4['type'];
                       

                          $wry5 = "SELECT `type` FROM tbl_equipment WHERE `Equip_ID` = '$st[4]'";
                          $run5 = mysqli_query($con, $wry5);
                          $row5 = mysqli_fetch_assoc($run5);

                          $sample5=$row5['type'];
                       

                          $wry6 = "SELECT `type` FROM tbl_equipment WHERE `Equip_ID` = '$st[5]'";
                          $run6 = mysqli_query($con, $wry6);
                          $row6 = mysqli_fetch_assoc($run6);

                          $sample6=$row6['type'];
                         

                          $wry7 = "SELECT `type` FROM tbl_equipment WHERE `Equip_ID` = '$st[6]'";
                          $run7 = mysqli_query($con, $wry7);
                          $row7 = mysqli_fetch_assoc($run7);

                          $sample7=$row7['type'];
                         

                          $wry8 = "SELECT `type` FROM tbl_equipment WHERE `Equip_ID` = '$st[7]'";
                          $run8 = mysqli_query($con, $wry8);
                          $row8 = mysqli_fetch_assoc($run8);

                          $sample8=$row8['type'];
                        

                          $wry9 = "SELECT `type` FROM tbl_equipment WHERE `Equip_ID` = '$st[8]'";
                          $run9 = mysqli_query($con, $wry9);
                          $row9 = mysqli_fetch_assoc($run9);

                          $sample9=$row9['type'];
                         

                          $wry10 = "SELECT `type` FROM tbl_equipment WHERE `Equip_ID` = '$st[9]'";
                          $run10 = mysqli_query($con, $wry10);
                          $row10 = mysqli_fetch_assoc($run10);

                          $sample10=$row10['type'];
                   

                          $wry11 = "SELECT `type` FROM tbl_equipment WHERE `Equip_ID` = '$st[10]'";
                          $run11 = mysqli_query($con, $wry11);
                          $row11 = mysqli_fetch_assoc($run11);

                          $sample11=$row11['type'];
                        

                          $wry12 = "SELECT `type` FROM tbl_equipment WHERE `Equip_ID` = '$st[11]'";
                          $run12 = mysqli_query($con, $wry12);
                          $row12 = mysqli_fetch_assoc($run12);

                          $sample12=$row12['type'];
                         


                          ?>
                            <tr>
                              <td><?= $row['Status'];?></td>
                              <td class="Tracking"><?= $row['Res_id'];?></td>
                              <td><?= $row['User'];?></td>
                              <td><?= $row['Office'];?></td>
                              <td><?= $row['resDate'];?></td>
                              <td><?= $row['Time_Start'];?></td>
                              <td><?= $row['Time_End'];?></td>
                               <td>
                                <?= $sample1;?>
                                <?= $sample2;?>
                                <?= $sample3;?>
                                <?= $sample4;?>
                                <?= $sample5;?>
                                <?= $sample6;?>
                                <?= $sample7;?>
                                <?= $sample8;?>
                                <?= $sample9;?>
                                <?= $sample10;?>
                                <?= $sample11;?>
                                <?= $sample12;?>
                              </td>
                              <td><?= $row['ReqName'];?></td>
                              <td><?= $row['School'];?></td>
                              <td><?= $row['Room_Venue'];?></td>
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