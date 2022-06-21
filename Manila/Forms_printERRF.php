<?php
// Update June 12 2022 created print file //
session_start();
  include('../Connection/Connection.php');
  //error_reporting(0);
  $userchkr = $_SESSION['Username'];
  $Choice1 =  $_SESSION['choice1']; 
  $Choice2 =  $_SESSION['choice2'];
  $Choice3 =  $_SESSION['choice3'];
  $Choice6 = $_SESSION['choice6'];


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
    <link rel="stylesheet" type="text/css" href="resource/css/print.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"/>
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
        <a class="btn btn-primary" style="float:right;" href="Forms_list.php">back</a>
      </nav>
    </div>
    </div>

     <?php

        $qrY= "SELECT * FROM equipmentrepairrequest WHERE `ReportName` LIKE '%$Choice1%' AND monthname(`MDate`) = '$Choice2' AND year(`MDate`) = '$Choice3' AND `ActionTaken` LIKE '%$Choice6%'";
              $ruN = mysqli_query($con, $qrY);

              if(mysqli_num_rows($ruN) > 0){
                 foreach($ruN as $roW){

                  ?>
              

           <div onclick="window.print();" class="containeredP">
                <h6 class="tHead" style="margin-bottom:0; width: 1011px;">CENTRO ESCOLAR UNIVERSITY<br> Manila * Makati * Malolos<br> Teaching and Learning Technology Department<br><br>Equipment Repair Request Form
                </h6>

                <table>
                  <th> <h6 class="tHead" style="width: 337px; text-align: left;">Building:<?=$roW['BuildiNG'];?></h6>
                  </th>
                   <th> <h6 class="tHead" style="width: 337px; text-align: left;">Room:<?=$roW['ROoM'];?></h6>
                  </th>
                   <th> <h6 class="tHead" style="width: 337px; text-align: left;">Date:<?=$roW['MDate'];?></h6>
                  </th>
                </table>
                 <table>
                  <th> <h6 class="tHead" style="width: 506px; text-align: left;">Description</h6>
                  </th>
                   <th> <h6 class="tHead" style="width: 505px; text-align: left;">Action Taken</h6>
                  </th>  
                </table>
                 <table>
                  <th> <h6 class="tHead" style="width: 506px; text-align: left;"><br>
                      Equipment: <?=$roW['DescEquip'];?><br>
                      Model: <?=$roW['Model'];?><br><br>
                      Serial No: <?=$roW['SerialNo'];?><br>
                      Equipment No: <?=$roW['DescEquipNo'];?><br>
                      Complaint: <?=$roW['Complaint'];?><br><br><br>
                  </h6>
                   <h6 class="tHead" style="width: 506px; text-align: left;"><br>Reported by:<br><br>
                      Printed Name: <?=$roW['ReportName'];?><br><br>
                      School/College/Department: <?=$roW['ReportDept'];?><br><br><br><br><br>
                      
                  </h6>
                  </th> 
                   <th> 
                      <?php
                        if($roW['ActionTaken'] == 'In-house' AND $roW['Repaired'] == 'Repaired'){
                          ?>
                          <h6 class="tHead" style="width: 251px; height: 319px; margin-bottom:145px; text-align: left; margin-top: 0;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
                            <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                            <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/></svg>
                          </svg>In-House<br>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
                            <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                            <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/></svg>Repaired<br><br> Remarks:&nbsp;<?=$roW['InhouseRemarks'];?><br><br>
                        Service Rendered by:<br><img style="width: 100px; margin-bottom:0; margin-top:0;" src="../upload/<?php echo $roW['InhouseSig']; ?>"><br><?=$roW['InhouseName'];?><br>Printed Name & Signature<br><br><?=$roW['InhouseDateTime'];?><br>Date/Time</h6>
                          <?PHP
                        }
                        else if($roW['ActionTaken'] == 'In-house' AND $roW['Repaired'] != 'Repaired'){
                          ?>
                           <h6 class="tHead" style="width: 251px; text-align: left;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
                            <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                            <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/></svg>
                          </svg>In-House<br>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/></svg>Repaired<br><br> Remarks:&nbsp;<?=$roW['InhouseRemarks'];?><br><br>
                        Service Rendered by:<br><img style="width: 100px; margin-bottom:0; margin-top:0;" src="../upload/<?php echo $roW['InhouseSig']; ?>"><br><?=$roW['InhouseName'];?><br>Printed Name & Signature<br><br><?=$roW['InhouseDateTime'];?><br>Date/Time</h6>
                          <?PHP
                        }
                          else if($roW['ActionTaken'] != 'In-house' AND $roW['Repaired'] != 'Repaired'){
                          ?>
                           <h6 class="tHead" style="width: 251px; margin-bottom:142px; text-align: left;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/></svg>In-House<br>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/></svg>Repaired<br><br> Remarks:&nbsp;<br>_____________________<br><br>
                        Service Rendered by:<br><br>___________________________<br>Printed Name & Signature<br>_________________________<br>Date/Time<br><br></h6>
                          <?PHP
                        }
                      ?>
                  </th>
                   <th> 
                     <?php
                        if($roW['ActionTaken'] == 'Outside'){
                          ?>
                          <h6 class="tHead" style="width: 253px; margin-bottom:145px; text-align: left; margin-top: 0; text-align: center;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
                            <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                            <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/></svg>
                          </svg>Outside<br><br><?=$roW['OutsideName'];?><br>
                            Printed Name<br><?=$roW['OutsideServicecntr'];?>
                            <br>Service Center<br><?=$roW['OutsideDateout'];?>
                            <br>Date Pulled-out<br><?=$roW['OutsideReturn'];?>
                            <br>Date Returned<br><?=$roW['OutsideORno'];?>
                            <br>Or No.<br>&nbsp;&nbsp;&nbsp;&nbsp;
                          </h6>
                          <?PHP
                        }
                        else if($roW['ActionTaken'] != 'Outside'){
                          ?>
                           <h6 class="tHead" style="width: 253px; text-align: left; margin-top:0; margin-bottom:145px;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/></svg>Outside<br><br><?=$roW['OutsideName'];?>_____________________<br>
                            Printed Name<br><?=$roW['OutsideServicecntr'];?>_____________________
                            <br>Service Center<br><?=$roW['OutsideDateout'];?>_____________________
                            <br>Date Pulled-out<br><?=$roW['OutsideReturn'];?>_____________________
                            <br>Date Returned<br><?=$roW['OutsideORno'];?>
                            <br>Or No. __________________<br>&nbsp;&nbsp;&nbsp;&nbsp;
                          </h6>
                          <?PHP
                        }
                      ?>
                  </th>
                </table>
                <table>
                   <h6 class="tHead" style="text-align: left; width: 506px; margin-left: 505px; margin-top: -148px;"><br>Attested by:<br><br>
                      Printed Name: <?=$roW['ReportName'];?><br><br>
                      School/College/Department: <?=$roW['ReportDept'];?><br>
                        </h6>

                </table>
                 <table>
                   <h6 class="tHead" style="width: 1011px; text-align: center;"><br>Approved by:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <br><img style="width: 200px; margin-bottom:0; margin-top:0;" src="../upload/<?php echo $roW['ApprovSig']; ?>"><br><?=$roW['ApprovName'];?><br>Head/Coordinator, TLTD/TLT Section
                  </h6>
                  </table>
                  <table>
                   <h6 class="tHead" style="width: 1011px; text-align: left; font-size: 15px;">Copies to: TLTD/TLT Section, Requesting party
                  </h6>
                  </table>
                  <table>
                   <h6 class="tHead" style="width: 1011px; text-align: left; font-size: 15px;">AAF-TL 03<br>09-01-2016

                  </h6>
                  </table>


                 <?PHP
                }
              }


      
      ?>
    </div>

    
  </header>

  
  <script src="resource/js/script.js"></script>
  <script src="vendor/js/jquery.js"></script>
  <script src="vendor/js/popper.js"></script>
  <script src="vendor/js/bootstrap.min.js"></script>
  
  </body>
</html>
