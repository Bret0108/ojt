<?php
	class delete extends config{
		public $Equip_ID;

		public function __construct($Equip_ID){
			$this->Equip_ID = $Equip_ID;
		}

		public function deleteTask(){
			$con = $this->con();
			$sql = "DELETE FROM `tbl_equipment_laptop` WHERE `Equip_ID` = ('$this->Equip_ID')";
			$data = $con->prepare($sql);
			if($data->execute()){
				return true;
			}else{
				return false;
			}
		}
	}

?>