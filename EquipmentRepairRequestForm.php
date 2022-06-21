<?php
//Updated june 15 2022 Updated Form inputs//
include('ERRF.php');
?>

<!doctype html>
<html lang="en">
  <head>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="vendor/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="resource/css/Equipment.css">
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
      <a href="Manila/Forms_list.php" id="Home"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/></svg>&nbsp;&nbsp; Back</a>
    </div>

    <div class="containered">
      <h5 class="ad_logTxt">Equipment Repair Request Form</h5>
      <form action=" " method="POST" enctype="multipart/form-data">

        <div class="row">
          <div class="col-25">
            <label for="subject">Building</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="BuIlding" value="" name="BuIlding" placeholder="Building" >
          </div>
        </div>
         <div class="row">
          <div class="col-25">
            <label for="subject">Room</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="rOOm" value="" name="rOOm" placeholder="Room" >
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="subject">Date</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="date" id="DATe" value="" name="DATe" placeholder="" >
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="subject">DESCRIPTION</label>
          </div>
          <div class="col-75">
            
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="subject">Equipment</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="EQpmt" value="" name="EQpmt" placeholder="Equipment" >
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="subject">Model</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="MoDEL" value="" name="MoDEL" placeholder="Model" >
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="subject">Serial No</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="serl" value="" name="serl" placeholder="Serial no." >
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="subject">Equipment No</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="equNO" value="" name="equNO" placeholder="Equipment no." >
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="subject">Complaint</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="Compt" value="" name="Compt" placeholder="Complaint" >
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="subject">REPORTED BY</label>
          </div>
          <div class="col-75">
           
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="subject">Name</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="NAMES" value="" name="NAMES" placeholder="name" >
          </div>
        </div>

         <div class="row">
          <div class="col-25">
            <label for="fname">Department</label>
          </div>
            <div class="col-75">
                 <select name="DEPT" id = "dept" onchange="ODept()">
                 <option  value=" ">Select</option>
                 <option  value="SCITECH">SCITECH</option>
                 <option  value="SELAMS">SELAMS</option>
                 <option  value="OPTOMETRY">OPTOMETRY</option>
                 <option  value="MEDTECH">MEDTECH</option>
                 <option  value="DENTISTRY">DENTISTRY</option>
                 <option  value="NHM">NHM</option>
                 <option  value="SAM">SAM</option>
                 <option  value="NURSING">NURSING</option>
                 <option  value="PHARMACY">PHARMACY</option>
                 <option  value="MEDICINE">MEDICINE</option>
                 <option  value="GRADSCHOOL">GRADSCHOOL</option>
                 <option  value="SENIORHIGH">SENIORHIGH</option>
                 <option  value="OTHERS">OTHERS</option>
                 </select>
          </div>
        </div>

        <div class="row">
          <div class="col-25" name="hidden-label" id="hidden-label">
            <label for="fname">Other Department</label>
          </div>
          <div class="col-75" name="hidden-panel" id="hidden-panel">
                 <input class="form-control" name="OtherDept" type="text" placeholder="Others">
          </div>
       </div>

       
        <div class="row">
          <div class="col-25">
            <label for="fname">Action Taken</label>
          </div>
            <div class="col-75">
                 <select name="actntkn" id = "Actntkn" onchange="actionTkn()">
                 <option  value=" ">Select</option>
                 <option  value="In-house">In-House</option>
                 <option  value="Outside">Outside</option>
                 </select>
          </div>
        </div>
       

        <div class="row">
          <div class="col-25" name="hidden-label1" id="hidden-label1">
            <label for="fname">Repaired</label>
          </div>
          <div class="col-75" name="hidden-panel1" id="hidden-panel1">
                  <select name="RePaird" id = "RePaird">
                 <option  value=" ">Select</option>
                 <option  value="Repaired">Repaired</option>
                 </select>
          </div>
        </div>
      

        <div class="row">
          <div class="col-25" name="hidden-label2" id="hidden-label2">
            <label for="fname">Remarks</label>
          </div>
          <div class="col-75" name="hidden-panel2" id="hidden-panel2">
                 <input class="form-control" name="RemaRKS" type="text" placeholder="Remarks">
          </div>
        </div>
   

        <div class="row">
          <div class="col-25" name="hidden-label3" id="hidden-label3">
            <label for="subject">SERVICE RENDERED BY:</label>
          </div>
          <div class="col-75" name="hidden-panel3" id="hidden-panel3">     
          </div>
        </div>
      
        <div class="row">
          <div class="col-25" name="hidden-label4" id="hidden-label4">
            <label for="subject">Name</label>
          </div>
          <div class="col-75" name="hidden-panel4" id="hidden-panel4">
            <input class="form-control" type="text" id="PNAMES" value="" name="PNAMES" placeholder="Name" >
          </div>
        </div>

      <div class="row">
          <div class="col-25" name="hidden-label5" id="hidden-label5">
            <label for="subject">Signature</label>
          </div>
          <div class="col-75" name="hidden-panel5" id="hidden-panel5">
          <input class="form-control" type="file" name="uploadfile2" value="" />
        </div>
      </div>
       
       <div class="row">
          <div class="col-25" name="hidden-label6" id="hidden-label6">
            <label for="subject">Date/Time</label>
          </div>
          <div class="col-75" name="hidden-panel6" id="hidden-panel6">
            <input class="form-control" type="text" id="Date-Time" value="" name="DateTime" placeholder="Date/Time" >
          </div>
        </div>
        
        <div class="row">
          <div class="col-25" name="hidden-label7" id="hidden-label7">
            <label for="subject">Service center Name</label>
          </div>
          <div class="col-75" name="hidden-panel7" id="hidden-panel7">
            <input class="form-control" type="text" id="PNAMe" value="" name="PNAMe" placeholder="Name" >
          </div>
        </div>

        <div class="row">
          <div class="col-25" name="hidden-label8" id="hidden-label8">
            <label for="subject">Service Center</label>
          </div>
          <div class="col-75" name="hidden-panel8" id="hidden-panel8">
            <input class="form-control" type="text" id="sErvice" value="" name="sErvice" placeholder="Service Center" >
          </div>
        </div>

        <div class="row">
          <div class="col-25" name="hidden-label9" id="hidden-label9">
            <label for="subject">Date Pulled Out</label>
          </div>
          <div class="col-75" name="hidden-panel9" id="hidden-panel9">
            <input class="form-control" type="date" id="DateOut" value="" name="DateOut" placeholder="Date Pulled Out" >
          </div>
        </div>

        <div class="row">
           <div class="col-25" name="hidden-label10" id="hidden-label10">
            <label for="subject">Date Returned</label>
          </div>
          <div class="col-75" name="hidden-panel10" id="hidden-panel10">
            <input class="form-control" type="date" id="DateReturn" value="" name="DateReturn" placeholder="Date Returned" >
          </div>
        </div>

          <div class="row">
           <div class="col-25" name="hidden-label11" id="hidden-label11">
            <label for="subject">OR number</label>
          </div>
          <div class="col-75" name="hidden-panel11" id="hidden-panel11">
            <input class="form-control" type="text" id="ORnum" value="" name="ORnum" placeholder="OR number" >
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="subject">ATTESTED BY:</label>
          </div>
          <div class="col-75">
    
        </div>
      </div>

       <div class="row">
          <div class="col-25">
            <label for="subject">Name</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="NAMES1" value="" name="NAMESATTESTEDBY" placeholder="name" >
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="subject">Signature</label>
          </div>
          <div class="col-75">
          <input class="form-control" type="file" name="uploadfileATTESTEDBY" value="" />
        </div>
      </div>

       <div class="row">
          <div class="col-25">
            <label for="subject">Date/Time</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="Date-Time1" value="" name="DateTimeATTESTEDBY" placeholder="Date/Time" >
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="subject">APPROVED BY:</label>
          </div>
          <div class="col-75">
    
        </div>
      </div>

       <div class="row">
          <div class="col-25">
            <label for="subject">Name</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="NAMESAPPROVED_BY" value="" name="NAMESAPPROVED_BY" placeholder="name" >
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="subject">Signature</label>
          </div>
          <div class="col-75">
          <input class="form-control" type="file" name="uploadfileAPPROVED_BY" value="" />
        </div>
      </div>

        <div class="rows">
          <input type="submit" name="ERRF" value="Submit">
        </div>
      </form>
    </div>
  </header>

   
  <script src="resource/js/Equip_Res.js"></script>
  <script src="vendor/js/jquery.js"></script>
  <script src="vendor/js/popper.js"></script>
  <script src="vendor/js/bootstrap.min.js"></script>
  
  </body>
</html>