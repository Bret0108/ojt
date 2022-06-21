<?php
// Update June 12 2022 created print file //
session_start();
  include('../Connection/Connection.php');
  //error_reporting(0);
  $userchkr = $_SESSION['Username'];
  $Choice1 =  $_SESSION['choice1']; 
  $Choice2 =  $_SESSION['choice2'];
  $Choice3 =  $_SESSION['choice3'];
  $Choice4 =  $_SESSION['choice4'];
  $Choice5 =  $_SESSION['choice5'];


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

        $qrY= "SELECT * FROM instructionalvideoeval WHERE `Evaluator Name` LIKE '%$Choice1%' AND `Video Title` LIKE '$Choice5' AND monthname(`daTE`)='$Choice2' AND year(`daTE`) = '$Choice3'";
              $ruN = mysqli_query($con, $qrY);

              if(mysqli_num_rows($ruN) > 0){
                 foreach($ruN as $roW){

                  ?>
    

           <div onclick="window.print();" class="containeredP" style="width: 100%; margin-left:0px;">
             <div class="table-responsive" style="width:100%; font-size:15px;">
                  <table class="tHeads">
                    <thead>
                        <tr>
                          <th class="tHeads"><h6>CENTRO ESCOLAR UNIVERSITY<br> Manila * Makati * Malolos<br> Teaching and Learning Technology Department</h6></th>
                        </tr>
                        <tr>
                         <th> <h6 class="label_Confirm">Instructional Video Evaluation Form</h6>

                              <br><h6 style="text-align:left; margin-left: 20px;">Video Title:&nbsp;<?=$roW['Video Title'];?><br>Evaluator:&nbsp;<?=$roW['Evaluator Name'];?> /<img style="width: 200px; margin-bottom:0; margin-top:0;" src="../upload/<?php echo $roW['Evaluator Signature']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date:&nbsp;<?=$roW['daTE'];?><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Name)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Signature)
                                </h6>


                             <br><h6 style=" margin-left: 20px; margin-right: 20px;text-align:left;">Instruction:<br>
                    Kindly rate the instructional video based on the following quality indicators by ticking one remark for each item using the following scale:<br></h6>

                  <div  style="text-align:center;">
                  <br><h6 style="margin-bottom:10px;">1 – Strongly Disagree<br>2 – Disagree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>3 – Undecided&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>4 – Agree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>5 – Strongly Agree&nbsp;&nbsp;&nbsp;&nbsp;</h6>
                   </div>
              <div class="table-responsive" style="text-align:left;" >
                  <table class="table tHeads">
                      <thead>
                        <tr>
                            <th class="tHeads">Items:</th>
                            <th class="tHeads">1</th>
                            <th class="tHeads">2</th>
                            <th class="tHeads">3</th>
                            <th class="tHeads">4</th>
                            <th class="tHeads">5</th>
                        <tbody>
                          <td class="tHeads">1. The content of the video was up-to-date</td>
                          <?php
                            if($roW['Question1'] == "1"){
                               ?>
                            
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                            else if($roW['Question1'] == "2"){
                               ?>
                           
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question1'] == "3"){
                               ?>
                            
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question1'] == "4"){
                               ?>
                            
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question1'] == "5"){
                               ?>
                         
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                              <?php
                            }
                            ?>
                        </tbody>
                        <tbody>
                           <td class="tHeads">2. The content of the video was generally useful</td>
                            <?php
                            if($roW['Question2'] == "1"){
                               ?>
                           
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                            else if($roW['Question2'] == "2"){
                               ?>
                           
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question2'] == "3"){
                               ?>
                          
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question2'] == "4"){
                               ?>
                           
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question2'] == "5"){
                               ?>
                           
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                              <?php
                            }
                            ?>
                        </tbody>
                         <tbody>
                          <td class="tHeads">3. The video was bias-free</td>
                            <?php
                            if($roW['Question3'] == "1"){
                               ?>
                            
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                            else if($roW['Question3'] == "2"){
                               ?>
                           
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question3'] == "3"){
                               ?>
                            
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question3'] == "4"){
                               ?>
                           
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question3'] == "5"){
                               ?>
                            
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                              <?php
                            }
                            ?>
                        </tbody>
                        <tbody>
                          <td class="tHeads">4. The objectives or key elements were clearly presented in the video</td>
                            <?php
                            if($roW['Question4'] == "1"){
                               ?>
                             
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                            else if($roW['Question4'] == "2"){
                               ?>
                            
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question4'] == "3"){
                               ?>
                            
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question4'] == "4"){
                               ?>
                          
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question4'] == "5"){
                               ?>
                            
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                              <?php
                            }
                            ?>
                        </tbody>
                        <tbody>
                            <td class="tHeads">5. The content of the video was easy to understand</td>
                           <?php
                            if($roW['Question5'] == "1"){
                               ?>
                             
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                            else if($roW['Question5'] == "2"){
                               ?>
                           
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question5'] == "3"){
                               ?>
                            
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question5'] == "4"){
                               ?>
                           
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question5'] == "5"){
                               ?>
                          
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                              <?php
                            }
                            ?>
                        </tbody>
                         <tbody>
                          <td class="tHeads">6. The video suggests application of newly acquired knowledge</td>
                           <?php
                            if($roW['Question6'] == "1"){
                               ?>
                             
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                            else if($roW['Question6'] == "2"){
                               ?>
                           
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question6'] == "3"){
                               ?>
                          
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question6'] == "4"){
                               ?>
                           
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question6'] == "5"){
                               ?>
                            
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                              <?php
                            }
                            ?>
                        </tbody>
                        <tbody>
                            <td class="tHeads">7. The video allows for learner reflection</td>
                            <?php
                            if($roW['Question7'] == "1"){
                               ?>
                             
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                            else if($roW['Question7'] == "2"){
                               ?>
                          
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question7'] == "3"){
                               ?>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question7'] == "4"){
                               ?>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question7'] == "5"){
                               ?>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                              <?php
                            }
                            ?>
                        </tbody>
                        <tbody>
                            <td class="tHeads">8. The video met the learning objectives of the topic</td>
                           <?php
                            if($roW['Question8'] == "1"){
                               ?>
                             
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                            else if($roW['Question8'] == "2"){
                               ?>
                          
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question8'] == "3"){
                               ?>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question8'] == "4"){
                               ?>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question8'] == "5"){
                               ?>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                              <?php
                            }
                            ?>
                        </tbody>
                        <tbody>
                            <td class="tHeads">9. The content of the video is related to the subject matter</td>
                           <?php
                            if($roW['Question9'] == "1"){
                               ?>
                             
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                            else if($roW['Question9'] == "2"){
                               ?>
                          
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question9'] == "3"){
                               ?>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question9'] == "4"){
                               ?>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question9'] == "5"){
                               ?>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                              <?php
                            }
                            ?>
                        </tbody>
                        <tbody>
                            <td class="tHeads">10. The vocabulary used is appropriate for the intended audience</td>
                           <?php
                            if($roW['Question10'] == "1"){
                               ?>
                             
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                            else if($roW['Question10'] == "2"){
                               ?>
                          
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question10'] == "3"){
                               ?>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question10'] == "4"){
                               ?>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                            <td class="tHeads"></td>
                              <?php
                            }
                             else if($roW['Question10'] == "5"){
                               ?>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"></td>
                            <td class="tHeads"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/></svg></td>
                              <?php
                            }
                            ?>
                        </tbody>

                        </tr>
                      </thead>
                  </table>
              </div>

                         <h6 style="text-align:left; font-size: 18px; margin-left: 20px;">Additional Comments:&nbsp;<?=$roW['Additional Comments'];?><br><br>Rating :<?=$roW['Rating'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Verbal Interpretation:&nbsp;<?=$roW['Verbal Interpretation'];?><br> <br>
                          Recommendation:&nbsp;<?=$roW['Recommendation'];?><br><br><br>
                          </h6>

                          <tr>
                          <th class="tHeads"><h6 style="text-align: left; font-size:15px; margin-left: 20px;">AAF-TL 04<br> 09/01/2016</h6></th>
                        </tr>

                         </th>
                        </tr>
                    </thead>
                  </table>
              </div>

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
