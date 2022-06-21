<?php
//Update June 2 2022 Removed Facility options//
//Update June 3 2022 Added Condemned option with condemn date added purchase date Added office option//
//June 08 2022 Update created print option//
//Update June 9 2022 Added category option//
//Update June 16 2022 removed free search changed to dropdown Status and Location//
  session_start();
  include('../Connection/Connection.php');
  error_reporting(0);
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
      <a href="Admin_home.php" id="Home"> Back</a>
    </div>
    
     <h3 class="contact">Equipment List</h3>
      <div class="containeredP">
      <form action="" method="POST">
         <h5 class="TrackerInstruction">Search for Equipment</h5>
        <div class="row">
           <div class="col-25">
            <label for="fname">Type</label>
          </div>
          <div class="col-75">
                 <select name="pili">
                <?php $sql = "SELECT type FROM `tbl_equipment` GROUP BY `type`";
                $all_categories = mysqli_query($con,$sql); 
                while ($category = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):; 
                ?>
                <option value="<?=$category['type'];?>"><?=$category['type'];?>
                </option>
                  <?php 
                      endwhile; 
                  ?>
                 </select>
          </div>

          <div class="col-25">
            <label for="fname">Status</label>
          </div>
          <div class="col-75">
                 <select class="form-control" type="text" id="Iny" name="Eqi_type" placeholder=" ">
                   <option value=" ">Select</option>
                   <option value="Available">Available</option>
                   <option value="Condemned">Condemned</option>
                 </select>
          </div>

            <div class="col-25">
            <label for="fname">Location</label>
          </div>
          <div class="col-75">
                 <select class="form-control" type="text" id="Iny" name="Opis" placeholder=" ">
                   <option value=" ">Select</option>
                   <option value="TLTD_MAIN">TLTD MAIN</option>
                   <option value="DENT_SCI">DENT SCI</option>
                   <option value="LAH_SUB_CENTER">LAH SUB CENTER</option>
                 </select>
          </div>


        </div>
          <div class="rows">
          <input type="submit" name="check" value="Check">
          </div>
      </form>
     </div>

     <div class="containeredP">
        <h3 class="label_Confirm">Equipment</h3>
         <div class="rows" style="margin-bottom: 10px;">
            <a class="btn btn-success" href="Inventory_Print.php" role="button">PRINT</a>
          </div>
         <div class="table-responsive">
            <table class = "table table-bordered" >
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
                      <?php include('PHP/Admin/Inventory_Equipment_list.php');?>

                  </tbody>
                  </tr>
                </thead>
            </table>
          </div>
    </div>

    
  </header>

  <section class="updel">
  <?php include('PHP/Admin/Inventory_AED.php') ?>
  <h3 class="contact">Update Equipment List</h3>
      <div class="containeredP">
        <h3 class="label_Confirm">Update or Delete</h3>
      <form action="" method="POST">
        <div class="row">
          <div class="col-25">
            <label for="fname">Type in Equipment Tag to Update/Delete</label>
          </div>
          <div class="col-75">
                 <input class="form-control" type="text" id="Iny" name="EF_ID" placeholder=" ">
          </div>
        </div>
          <div class="rows">
          <input type="submit" name="checks" value="Check">
          </div>
      </form>
     </div>

     <div class="containeredP">
      <h3 class="label_Confirm">Add New Equipment</h3>
      <form action="" method="POST">
        <div class="row">
          <div class="col-25">
            <label for="fname">Equipment Tag</label>
          </div>
          <div class="col-75">
                 <input class="form-control"  type="text" id="Iny" name="IDe" value="<?=$updt['Tag'];?>" placeholder="">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="fname">Type</label>
          </div>
          <div class="col-75">
                 <input class="form-control" type="text" id="Iny" name="type" value="<?=$updt['type'];?>" placeholder="">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="fname">Brand name</label>
          </div>
          <div class="col-75">
                 <input class="form-control" type="text" id="Iny" name="name" value="<?=$updt['name'];?>" placeholder="">
          </div>
        </div>

         <div class="row">
          <div class="col-25">
            <label for="fname">Model</label>
          </div>
          <div class="col-75">
                 <input class="form-control" type="text" id="Iny" name="mOwDel" value="<?=$updt['MODel'];?>" placeholder="">
          </div>

        </div>
         <div class="row">
          <div class="col-25">
            <label for="fname">Information</label>
          </div>
          <div class="col-75">
                 <input class="form-control" type="text" id="Iny" name="information" value="<?=$updt['information'];?>" placeholder=" ">
          </div>
        </div>

         <div class="row">
          <div class="col-25">
            <label for="fname">Purchase Date</label>
          </div>
          <div class="col-75">
                 <input class="form-control" name="purchDate" type="Date" placeholder=" " min="2022" max="3000" value="<?=$updt['Purchase Date'];?>">
          </div>
        </div>

         <div class="row">
          <div class="col-25">
            <label for="fname">Location</label>
          </div>
            <div class="col-75">
                 <select name="pili1" id = "oFfice">
                  <option  value=" ">Select</option>
                 <option  value="TLTD_MAIN">TLTD MAIN</option>
                 <option  value="Dent_Sci">DENT SCI</option>
                 <option  value="LAH_sub_center">LAH sub Center</option>
                 </select>
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="fname">Status</label>
          </div>
            <div class="col-75">
                 <select name="pili" id = "stats" onchange = "showHide()">
                  <option  value=" ">Select</option>
                 <option  value="Available">Available</option>
                 <option  value="Condemned">Condemned</option>
                 </select>
          </div>
        </div>

        <div class="row">
          <div class="col-25" name="hidden-label" id="hidden-label">
            <label for="fname">Date Condemned</label>
          </div>
          <div class="col-75" name="hidden-panel" id="hidden-panel">
                 <input class="form-control" name="conDate" type="Date" placeholder=" " min="2022" max="3000">
          </div>
        </div>

          <div class="rows">
          <input type="submit" name="Update" value="Update">
          <input type="submit" name="Delete" value="Delete">
          <input type="submit" name="Add" value="Add">
          </div>
      </form>
     </div>

  </section>
 

  
  <script src="resource/js/script.js"></script>
  <script src="vendor/js/jquery.js"></script>
  <script src="vendor/js/popper.js"></script>
  <script src="vendor/js/bootstrap.min.js"></script>
  
  </body>
</html>