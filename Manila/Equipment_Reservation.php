<?php
session_start();
$email = $_SESSION['emaIl'];
$name = $_SESSION['name'];
include('PHP/EquipRes/insertRes.php'); 
include('PHP/EquipRes/Cancel_Res.php');
include('PHP/EquipRes/inventory.php');
//Updated June 3 2022 Added Department options added office hours stopper//
//Updated june 7 2022 Added Null Equipment Checker//
//Updated June 14 2022 added google login//
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
      <a href="../Manila/UserCheck.php" id="Home"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/></svg>&nbsp;&nbsp; Back</a>
    </div>

    <div class="containered">
      <h5 class="ad_logTxt">Equipment Reservation</h5>
      <form action=" " method="POST" >
        <div class="row">
          <div class="col-25">
            <label for="subject">Nature of Service/s requested:</label>
          </div>
          <div class="col-75">
              <input type="checkbox"  name="Nature[]" value="Academic">
              <label for="Academic">Academic</label>
              <input type="checkbox"  name="Nature[]" value="Co-curricular/Extra-curricular">
              <label for="CocurricularExtracurricular">Co-curricular/Extra-curricular</label><br>
              <label for="others1">others</label>
              <input class="form-control" type="text" id="others1" name="Nature[]" placeholder="Others"></input>
          </div>
          <div class="col-25">
            <label for="subject">Purpose:</label>
          </div>
          <div class="col-75">
              <input type="checkbox" id="PresentationLecture" name="Purpose[]" value="Presentation/Lecture">
              <label for="PresentationLecture">Presentation/Lecture</label>
              <input type="checkbox" id="Viewing" name="Purpose[]" value="Viewing">
              <label for="Viewing">Viewing</label><br>
              <label for="others2">others</label>
              <input class="form-control" type="text" id="other2" name="Purpose[]" placeholder="Others"></input>
          </div>
          <div class="col-25">
            <label for="subject">Equipment:</label>
          </div>
          <div class="col-75">    
              <input class="Laptop" type="checkbox" id="Laptop" name="Equipment[]" value="<?= $row['Equip_ID'];?>">
              <label for="Laptop"><?= $row['type'];?></label>
              <input type="checkbox" id="OverheadProjector" name="Equipment[]" value="<?= $row1['Equip_ID'];?>">
              <label for="Overheadprojector"><?= $row1['type'];?></label>
              <input type="checkbox" id="DLP/LCDProjector" name="Equipment[]" value="<?= $row2['Equip_ID'];?>">
              <label for="DLP/LCDprojector"><?= $row2['type'];?></label>
              <input type="checkbox" id="VHSplayer" name="Equipment[]" value="<?= $row3['Equip_ID'];?>">
              <label for="VHSplayer"><?= $row3['type'];?></label><br>
              <input type="checkbox" id="SoundSystem" name="Equipment[]" value="<?= $row4['Equip_ID'];?>">
              <label for="SoundSystem"><?= $row4['type'];?></label>
              <input type="checkbox" id="DVDplayer" name="Equipment[]" value="<?= $row5['Equip_ID'];?>">
              <label for="DVDplayer"><?= $row5['type'];?></label>
              <input type="checkbox" id="VCDplayer" name="Equipment[]" value="<?= $row6['Equip_ID'];?>">
              <label for="VCDplayer"><?= $row6['type'];?></label>
              <input type="checkbox" id="CDcassettePlayer" name="Equipment[]" value="<?= $row7['Equip_ID'];?>">
              <label for="CDcassettePlayer"><?= $row7['type'];?></label><br>
              <input type="checkbox" id="Karaoke" name="Equipment[]" value="<?= $row8['Equip_ID'];?>">
              <label for="Karaoke"><?= $row8['type'];?></label>
              <input type="checkbox" id="Microphone" name="Equipment[]" value="<?= $row9['Equip_ID'];?>">
              <label for="Microphone"><?= $row9['type'];?></label>
              <input type="checkbox" id="DocumentCamera" name="Equipment[]" value="<?= $row10['Equip_ID'];?>">
              <label for="DocumentCamera"><?= $row10['type'];?></label>
              <input type="checkbox" id="DigitalvideoCamera" name="Equipment[]" value="<?= $row11['Equip_ID'];?>">
              <label for="DigitalvideoCamera"><?= $row11['type'];?></label><br>
              <input type="checkbox" id="DigitalCamera(still)" name="Equipment[]" value="<?= $row12['Equip_ID'];?>">
              <label for="DigitalCamera(still)"><?= $row12['type'];?></label><br>
              <label for="eqipment2"> Instructional Materials:</label><br>
              <input type="checkbox" id="DocumentationVideos" name="Equipment[]" value="<?= $row13['Equip_ID'];?>">
              <label for="DocumentationVideos"><?= $row13['type'];?></label>
              <input type="checkbox" id="EducationalVideos" name="Equipment[]" value="<?= $row14['Equip_ID'];?>">
              <label for="EducationalVideos"><?= $row14['type'];?></label>
              <input type="checkbox" id="Music" name="Equipment[]" value="<?= $row15['Equip_ID'];?>">
              <label for="Music"><?= $row15['type'];?></label><br>
              <label for="eqipment3"> Others:</label><br>
              <input type="checkbox" id="HDMIconnector" name="Equipment[]" value="<?= $row16['Equip_ID'];?>">
              <label for="HDMIconnector"><?= $row16['type'];?></label>
              <input type="checkbox" id="VGAconnector" name="Equipment[]" value="<?= $row17['Equip_ID'];?>">
              <label for="VGAconnector"><?= $row17['type'];?></label>
              <input type="checkbox" id="LightningDigitalAVadapter" name="Equipment[]" value="<?= $row18['Equip_ID'];?>">
              <label for="LightningDigitalAVadapter"><?= $row18['type'];?></label>     
          </div>
           <div class="col-25">
                <label for="subject">Facility:</label>
              </div>
              <div class="col-75">
              <input type="checkbox" id="ViewingRoom" name="Equipment[]" value="<?= $row19['Equip_ID'];?>">
              <label for="Viewing Room"><?= $row19['type'];?></label>
              </div> 
      </div>

        <div class="row">
          <div class="col-25">
            <label for="fname">Borrowing Date</label>
          </div>
          <div class="col-75">
            <input type="date" id="resDate" name="resDate" value=" " min="2022-01-01" max="3050-12-31" required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="subject">Time Start</label>
          </div>
          <div class="col-75">
            <input type="time" id="TimeStart" name="TimeStart" value="" min="08:00" max="18:00" required>
          </div>
          <div class="col-25">
            <label for="subject">Time End</label>
          </div>
          <div class="col-75">
            <input type="time" id="TimeEnd" name="TimeEnd" value="" min="08:00" max="18:00" required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="fname">Room/Venue</label>
          </div>
            <div class="col-75">
                 <select name="Room_Venue" id = "venue" onchange="venueRoom()">
                 <option  value=" ">Select</option>
                 <option  value="GDLSC">GDLSC</option>
                 <option  value="LAH">LAH</option>
                 <option  value="DCT">DCT</option>
                 <option  value="MVH">MVH</option>
                 <option  value="DENT SCI">DENT SCI</option>
                 <option  value="ICT">ICT</option>
                 <option  value="SDV">SDV</option>
                 <option  value="PHL">PHL</option>
                 <option  value="CDL">CDL</option>
                 <option  value="OTHERS">OTHERS</option>
                 </select>
          </div>
        </div>

        <div class="row">
          <div class="col-25" name="hidden-label1" id="hidden-label1">
            <label for="fname">Other Venues</label>
          </div>
          <div class="col-75" name="hidden-panel1" id="hidden-panel1">
                 <input class="form-control" name="Othervenue" type="text" placeholder="Others">
          </div>
        </div>

         <div class="row">
          <div class="col-25" name="hidden-label2" id="hidden-label2">
            <label for="fname">Room Number</label>
          </div>
          <div class="col-75" name="hidden-panel2" id="hidden-panel2">
                 <input class="form-control" name="roomNo" type="text" placeholder="Room number">
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="subject">Requester Name</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="ReqName" value="<?=$name ?>" name="ReqName" placeholder="<?=$name ?>" disabled required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="subject">School ID number</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="SchoolID" value="" name="SchoolID" placeholder="SchoolID" required>
          </div>
        </div>
         
         <div class="row">
          <div class="col-25">
            <label for="subject">Email</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="Email" name="Email" value="<?=$email?>" placeholder="<?=$email?>" disabled required>
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="fname">Department</label>
          </div>
            <div class="col-75">
                 <select name="pili1" id = "dept" onchange="ODept()">
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
            
            <div id="acknowledge">
              <h4>Terms and Conditions</h4>
                <p><input type="checkbox" id="Terms" name="Terms" value=" " required> I acknowledge receipt of and responsibility for item/s listed above which I promise to return on the specified date and time. I agree to pay the imposed fine per hour for each material/equipment not returned on due time.<br>
                  <input type="checkbox" id="Terms1" name="Terms1" value=" " required>
                 I also understand that I am accountable for any loss and/or damage of the item/s I borrowed. I promise to abide by all these policies as I hereby affix my signature and certify that personal data stated herein are correct.</p>
            </div>
                  <!-- Trigger/Open The Modal -->
            <h6 id="myBtn" onclick="TnC()">Guidelines on the use of Multimedia Equipment and Facilities</h6>


            <!-- The Modal -->
            <div id="myModal" class="modal">

              <!-- Modal content -->
              <div class="modal-content">
                <span class="close">&times;</span>
                <p>GUIDELINES ON THE USE OF MULTIMEDIA EQUIPMENT AND FACILITIES<br> 
                    1. The borrower shall personally contact the staff member at least 24 hours before the scheduled classroom activity. For Department/University-wide activities, a three-day advanced reservation is required.<br> 
                    2. The borrower should accomplish the Application for TLTD/TLT Section Equipment, Materials, Services  Form. He/she shall be immediately informed by the staff member if and when his/her request is not approved of by the Head/Coordinator either due to conflict in the schedule or the requested equipment is unavailable on the specified date requested for use.<br>  
                    3. All borrowed equipment and/or material/s shall be immediately returned by the borrower after use. No overnight borrowing is allowed. In cases where an activity is set on the next day, equipment like DVD/CD player shall be made available for the borrower’s use until 8:00 in the evening provided that the said equipment shall be endorsed to the Security Department and shall be returned by the borrower at 7:00 in the morning of the next day. A fine in the amount of Php 100.00 per hour shall be imposed for every material/equipment unreturned on due time.<br> 
                    4. In the choice of instructional materials, a catalogue shall be made available.<br> 
                    5. In case there is a need to preview, edit or dub materials, such as video and slides, the use of the Preview and Editing Room shall only be made available upon advanced reservation from the staff.<br> 
                    6. For equipment and/or instructional material that will be brought out of the campus, a letter of request addressed to VP for Academic Affairs / VP for CEU Makati / VP for CEU Malolos course through the Head/Coordinator must be secured three days in advance before the scheduled date of activity.<br> 
                    7. Faculty members or students who wish to bring their own materials and/or media equipment must secure the appropriate entry and exit clearance from the Security Office.<br>  
                    8. Any damage (if proven intentional) or loss of borrowed equipment and/or materials shall be the responsibility of the borrower.</p>
              </div>

            </div>

        <div class="rows">
          <input type="submit" name="sub" value="Submit">
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