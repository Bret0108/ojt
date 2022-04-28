<?php
	class edit extends config{
		public $Equip_ID;

		public function __construct($Equip_ID){
			$this->Equip_ID = $Equip_ID;
		}

		public function editTask(){
			$con = $this->con();
			$sql = "UPDATE `tbl_equipment_laptop` SET `quantity` = '0' WHERE `Equip_ID` = ('$this->Equip_ID')";
			$data = $con->prepare($sql);
			if($data->execute()){
				return true;
			}else{
				return false;
			}
		}
	}

?>