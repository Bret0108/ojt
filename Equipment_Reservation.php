<?php
    // Connect to database
  $con = mysqli_connect("localhost","root","","tltd");
  
  // mysqli_connect("servername","username","password","database_name")

  // Get all the categories from category table

  $sql = "SELECT * FROM `tbl_equipment`";
  $all_categories = mysqli_query($con,$sql);

  
   // User did not yet submit a choice, so present list

  // The following code checks if the submit button is clicked
  // and inserts the data in the database accordingly
  if(isset($_POST['submit']))
  {
    // Store the Product name in a "name" variable
    //$name = mysqli_real_escape_string($con,$_POST['Product_name']);
    
    // Store the Category ID in a "id" variable
    $type = mysqli_real_escape_string($con,$_POST['Type']);
    
    // Creating an insert query using SQL syntax and
    // storing it in a variable.
    //$sql_insert =
    //"INSERT INTO `product`(`product_name`, `category_id`)
    //  VALUES ('$name','$id')";
    
    // The following code attempts to execute the SQL query
    // if the query executes with no errors
    // a javascript alert message is displayed
    // which says the data is inserted successfully
    //if(mysqli_query($con,$sql_insert))
    //{
    //  echo '<script>alert("Product added successfully")</script>';
    //}
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

    <div class="containered">
      <h5 class="ad_logTxt">Equipment Reservation</h5>
      <form action="" method="POST" >
        <div class="row">
          <div class="col-25">
            <label for="subject">Equipment</label>
          </div>
          <div class="col-75">
            <select name="Type"style="height:60px">
                
                  <option id ="Laptop" value="Laptop">
                      "Laptop"
                  </option>
                  <option id ="Projector "value="Projector">
                      "Projector"
                  </option>
                  <option id = "SoundSystem" value="Sound System">
                      "Sound System"
                  </option>
                  <option id = "Microphone" value="Microphone">
                      "Microphone"
                  </option>
               
            </select>
          </div>
        </div>
         <div class="row">
          <div class="col-25">
            <label for="subject">Equipment</label>
          </div>
          <div class="col-75">
            <select name="Category "style="height:60px">
                <?php
                  // use a while loop to fetch data
                  // from the $all_categories variable
                  // and individually display as an option
                  while ($equipment = mysqli_fetch_array(
                      $all_categories,MYSQLI_ASSOC)):;
                ?>
                  <option value="<?php echo $equipment["Equip_ID"];
                    // The value we usually set is the primary key
                  ?>">

                    <?php echo $equipment["name"];
                      // To show the category name to the user
                    ?>

                  </option>
                <?php
                  endwhile;
                  // While loop must be terminated

                ?>
            </select>
          </div>
        </div>



        <div class="row">
          <div class="col-25">
            <label for="fname">Date</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="fname" name="username" placeholder="Username" required></input>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="subject">Time</label>
          </div>
          <div class="col-75">
            <input class="form-control" type="text" id="subject" name="password" placeholder="Password" style="height:50px" required></input>
          </div>
        </div>
       
        <div class="rows">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>

    <a class ="btn reviews-btn"  href="index.php">Back to Home</a>
  </header>
          

   <footer>
    <div class="container">
      <div class="row">
        <div class="col-md">
          <p class="ft2">
            CTTO for pictures, For educational Purposes Only<br/>&nbsp;&nbsp;&nbsp;
            all rights reserve 2021<br/>&nbsp;&nbsp;&nbsp;
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-twitter-square"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-youtube"></i>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <script src="resource/js/script.js"></script>
  <script src="vendor/js/jquery.js"></script>
  <script src="vendor/js/popper.js"></script>
  <script src="vendor/js/bootstrap.min.js"></script>
  
  </body>
</html>