<?php
	function insertN(){
		 if(!empty($_GET['name']&$_GET['review'])){
      $insert = new insert($_GET['name'],$_GET['review']);
      if($insert->insertName()){
        echo '<div class="alerta col-md-9 alert alert-success alert-dismissible fade show" role="alert">
  			 Review has been submitted Successfully.
  			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>';
      }else{
        echo '<div class=" col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
  				Review was not submitted successfully try again.
  				<button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="Close"></button>
				</div>';
      }
    }
  }


	function deleteT(){
		 if(!empty($_GET['delete'])){
      $delete = new delete($_GET['delete']);
      if($delete->deleteTask()){
        echo '<div class=" col-md-9 alert alert-warning alert-dismissible fade show" role="alert">
  			 Review has been denied.
  			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>';
      }else{
        echo '<div class=" col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
  				Review was not deleted successfully try again.
  				<button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="Close"></button>
				</div>';
      }
    }

    function editT(){
		 if(!empty($_GET['edit'])){
      $edit = new edit($_GET['edit']);
      if($edit->editTask()){
        echo '<div class=" col-md-9 alert alert-info alert-dismissible fade show" role="alert">
  			 Review has been posted.
  			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>';
      }else{
        echo '<div class=" col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
  				Review did not post successfully try again.
  				<button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="Close"></button>
				</div>';
      	}
    }
		}
	}

  function Alogins(){
     if(!empty($_GET['username']&$_GET['password'])){
      $logins = new logins($_GET['username'],$_GET['password']);
      
      $con=$this->con();
            $sql= "SELECT * FROM `admin_login` WHERE `Username`= '$username'AND `Password`='$password'";
            $data = $con->prepare($sql);
            $data->execute();

            if (mysql_num_rows($result) === 1) {
                $result = $data->fetchAll(PDO::FETCH_ASSOC);
                if ($result['Username'] === $logins) {
                  echo "Logged in!";
                  header("Location: index.php");
                }
            }
      }
  }


	function viewTableI(){
		$view = new view();
    $view->viewCompletedData();
	}

  function viewTableT(){
    $view = new view();
    $view->viewData();
  }

	function waiterT(){
    deleteT();
    editT();
	}


  function waiterI(){
    insertN();
    deleteT();
    editT();
  }

  function projector(){
    $con = mysqli_connect("localhost","root","","tltd");
  
  // mysqli_connect("servername","username","password","database_name")

  // Get all the categories from category table
  $sql = "SELECT * FROM `tbl_equipment` where `type` = 'Projector'";
  $all_categories = mysqli_query($con,$sql);
  }

 
?>