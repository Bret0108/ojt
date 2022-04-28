<?php
	class insert extends config{
		public $name;
		public $review;

		public function __construct($name,$review){
			$this->name = $name;
			$this->review = $review;
		}

		

		public function insertName(){
			$con = $this->con();
			$sql = "INSERT INTO `tbl_midterms`(`name`,`review`) VALUES ('$this->name','$this->review')";
			$data = $con->prepare($sql);
			if($data->execute()){
				return true;
			}else{
				return false;
			}
		}
	}

?>