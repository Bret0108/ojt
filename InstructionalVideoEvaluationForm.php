<?php
//June 13 2022 created InstructionalVideoEvaluationForm//
include('IVEF.php');
include('Connection/Connection.php');
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
      <a href="Forms.php" id="Home"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/></svg>&nbsp;&nbsp; Back</a>
    </div>

    <div class="containered">
      <h5 class="ad_logTxt">Instructional Video Evaluation Form</h5>
      <form action=" " method="POST" enctype="multipart/form-data">

         <div class="row">
          <div class="col-25">
            <label for="subject">Video Title</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="VidTitle" value="" name="VidTitle" placeholder="Video Title" required>
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="subject">Evaluator Name</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="Eval" value="" name="Eval" placeholder="Evaluator name" required>
          </div>
           <div class="col-25">
            <label for="subject">Evaluator Signature</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="file" name="uploadfile" value="" />
          </div>
           <div class="col-25">
            <label for="subject">Date</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="date" id="Deyt" value="" name="Deyt" required>
          </div>
        </div>

        <br><h6 class="ad_logTxt">instruction:<br>
              Kindly rate the instructional video based on the following quality indicators by ticking one remark for each item using the following scale:<br></h6>

            <div class="ad_logTxt" style="text-align:center;">
            <br><p style="margin-bottom:10px;">1 – Strongly Disagree<br>2 – Disagree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>3 – Undecided&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>4 – Agree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>5 – Strongly Agree&nbsp;&nbsp;&nbsp;&nbsp;</p>
             </div>
        <div class="table-responsive">
            <table class = "table table-bordered">
                <thead>
                  <tr>
                      <th class="tHead">Items:</th>
                      <th class="tHead">1</th>
                      <th class="tHead">2</th>
                      <th class="tHead">3</th>
                      <th class="tHead">4</th>
                      <th class="tHead">5</th>
                  <tbody>
                      <td>1. The content of the video was up-to-date</td>
                      <td><input type="radio" id="One" name="rating1" value="1"></td>
                      <td><input type="radio" id="Two" name="rating1" value="2"></td>
                      <td><input type="radio" id="Three" name="rating1" value="3"></td>
                      <td><input type="radio" id="Four" name="rating1" value="4"></td>
                      <td><input type="radio" id="Five" name="rating1" value="5"></td>
                  </tbody>
                  <tbody>
                      <td>2. The content of the video was generally useful</td>
                      <td><input type="radio" id="One" name="rating2" value="1"></td>
                      <td><input type="radio" id="Two" name="rating2" value="2"></td>
                      <td><input type="radio" id="Three" name="rating2" value="3"></td>
                      <td><input type="radio" id="Four" name="rating2" value="4"></td>
                      <td><input type="radio" id="Five" name="rating2" value="5"></td>
                  </tbody>
                   <tbody>
                      <td>3. The video was bias-free</td>
                      <td><input type="radio" id="One" name="rating3" value="1"></td>
                      <td><input type="radio" id="Two" name="rating3" value="2"></td>
                      <td><input type="radio" id="Three" name="rating3" value="3"></td>
                      <td><input type="radio" id="Four" name="rating3" value="4"></td>
                      <td><input type="radio" id="Five" name="rating3" value="5"></td>
                  </tbody>
                  <tbody>
                      <td>4. The objectives or key elements were clearly presented in the video</td>
                      <td><input type="radio" id="One" name="rating4" value="1"></td>
                      <td><input type="radio" id="Two" name="rating4" value="2"></td>
                      <td><input type="radio" id="Three" name="rating4" value="3"></td>
                      <td><input type="radio" id="Four" name="rating4" value="4"></td>
                      <td><input type="radio" id="Five" name="rating4" value="5"></td>
                  </tbody>
                  <tbody>
                      <td>5. The content of the video was easy to understand</td>
                      <td><input type="radio" id="One" name="rating5" value="1"></td>
                      <td><input type="radio" id="Two" name="rating5" value="2"></td>
                      <td><input type="radio" id="Three" name="rating5" value="3"></td>
                      <td><input type="radio" id="Four" name="rating5" value="4"></td>
                      <td><input type="radio" id="Five" name="rating5" value="5"></td>
                  </tbody>
                   <tbody>
                      <td>6. The video suggests application of newly acquired knowledge</td>
                      <td><input type="radio" id="One" name="rating6" value="1"></td>
                      <td><input type="radio" id="Two" name="rating6" value="2"></td>
                      <td><input type="radio" id="Three" name="rating6" value="3"></td>
                      <td><input type="radio" id="Four" name="rating6" value="4"></td>
                      <td><input type="radio" id="Five" name="rating6" value="5"></td>
                  </tbody>
                  <tbody>
                      <td>7. The video allows for learner reflection</td>
                      <td><input type="radio" id="One" name="rating7" value="1"></td>
                      <td><input type="radio" id="Two" name="rating7" value="2"></td>
                      <td><input type="radio" id="Three" name="rating7" value="3"></td>
                      <td><input type="radio" id="Four" name="rating7" value="4"></td>
                      <td><input type="radio" id="Five" name="rating7" value="5"></td>
                  </tbody>
                  <tbody>
                      <td>8. The video met the learning objectives of the topic</td>
                      <td><input type="radio" id="One" name="rating8" value="1"></td>
                      <td><input type="radio" id="Two" name="rating8" value="2"></td>
                      <td><input type="radio" id="Three" name="rating8" value="3"></td>
                      <td><input type="radio" id="Four" name="rating8" value="4"></td>
                      <td><input type="radio" id="Five" name="rating8" value="5"></td>
                  </tbody>
                  <tbody>
                      <td>9. The content of the video is related to the subject matter</td>
                      <td><input type="radio" id="One" name="rating9" value="1"></td>
                      <td><input type="radio" id="Two" name="rating9" value="2"></td>
                      <td><input type="radio" id="Three" name="rating9" value="3"></td>
                      <td><input type="radio" id="Four" name="rating9" value="4"></td>
                      <td><input type="radio" id="Five" name="rating9" value="5"></td>
                  </tbody>
                  <tbody>
                      <td>10. The vocabulary used is appropriate for the intended audience</td>
                      <td><input type="radio" id="One" name="rating10" value="1"></td>
                      <td><input type="radio" id="Two" name="rating10" value="2"></td>
                      <td><input type="radio" id="Three" name="rating10" value="3"></td>
                      <td><input type="radio" id="Four" name="rating10" value="4"></td>
                      <td><input type="radio" id="Five" name="rating10" value="5"></td>
                  </tbody>

                  </tr>
                </thead>
            </table>
        </div>

         <div class="row">
          <div class="col-25">
            <label for="subject">Additional Comments</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="Comnt" value="" name="Comnt" placeholder="Comments" required>
          </div>
           <div class="col-25">
            <label for="subject">Rating</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="RatinG" value="" name="RatinG" placeholder="Rating" required>
          </div>
           <div class="col-25">
            <label for="subject">Verbal Interpretation</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="VerInt" value="" name="VerInt" placeholder="Verbal Interpretation" required>
          </div>
          <div class="col-25">
            <label for="subject">Recommendation</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="Recom" value="" name="Recom" placeholder="Recommendation" required>
          </div>
        </div>
            

        <div class="rows">
          <input type="submit" name="IVEF" value="Submit">
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