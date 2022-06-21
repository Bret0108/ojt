<?php
//June 13 2022 created InstructionalVideoEvaluationForm//
include('Connection/Connection.php');

if(isset($_POST['IVEF'])){

	$VidTitle = $_POST['VidTitle'];
	$EvalName = $_POST['Eval'];
	$filename = $_FILES['uploadfile']["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./upload/" . $filename;
	$daTE = $_POST['Deyt'];
	$rating1 = $_POST['rating1'];
	$rating2 = $_POST['rating2'];
	$rating3 = $_POST['rating3'];
	$rating4 = $_POST['rating4'];
	$rating5 = $_POST['rating5'];
	$rating6 = $_POST['rating6'];
	$rating7 = $_POST['rating7'];
	$rating8 = $_POST['rating8'];
	$rating9 = $_POST['rating9'];
	$rating10 = $_POST['rating10'];
	$Comnt = $_POST['Comnt'];
	$RatinG = $_POST['RatinG'];
	$VerInt = $_POST['VerInt'];
	$Recom = $_POST['Recom'];

	$qry="INSERT IGNORE INTO instructionalvideoeval(`Video Title`,`Evaluator Name`,`Evaluator Signature`,`daTE`,`Question1`,`Question2`,`Question3`,`Question4`,`Question5`,`Question6`,`Question7`,`Question8`,`Question9`,`Question10`,`Additional Comments`,`Rating`,`Verbal Interpretation`,`Recommendation`) VALUES('$VidTitle','$EvalName','$filename','$daTE','$rating1','$rating2','$rating3','$rating4','$rating5','$rating6','$rating7','$rating8','$rating9','$rating10','$Comnt','$RatinG','$VerInt','$Recom')";
		mysqli_query($con,$qry);
		 if (move_uploaded_file($tempname, $folder)) {
		 	?>
			<div class="alert alert-primary d-flex align-items-center" role="alert" style = "margin-bottom:0px;">
					  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
					    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
					  </svg>&nbsp;&nbsp;
					  <div>
					  	Evaluation Submitted!! Thank you for your response.
					  </div>
					</div>
			<?PHP
    	} 
    	else {
        ?>
			<div class="alert alert-primary d-flex align-items-center" role="alert" style = "margin-bottom:0px;">
					  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
					    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
					  </svg>&nbsp;&nbsp;
					  <div>
					  	File did not upload please try again.
					  </div>
					</div>
			<?PHP		
    	}

}

?>