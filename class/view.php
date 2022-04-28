<?php
	class view extends config{
		public function viewData(){
			$con=$this->con();
			$sql= "SELECT * FROM `tbl_equipment_laptop` WHERE `quantity`= '1'";
			$data = $con->prepare($sql);
			$data->execute();
			$result = $data->fetchAll(PDO::FETCH_ASSOC);
			echo "<h3 class='pt-2 ganja'>wampipTEA Reviews</h3>";
			echo "<table class='table table-dark table-striped'>";
			echo "<thead>
					<tr>
						<th>Equip_ID</th>
						<th>Name</th>
						<th>Description</th>
						<th class='sisig'>Quantity</th>
						<th></th>
					</tr>
				</thead><tbody>";
					foreach ($result as $data){
						echo "<tr>";
						echo "<td>$data[Equip_ID]</td>";
						echo "<td>$data[Name]</td>";
						echo "<td>$data[description]</td>";
						echo "<td class='sisig'>$data[quantity]</td>";
						echo "<td>
							<a class='btn btn-success' href='testimonial.php?edit=$data[Equip_ID]'>APPROVE</a>
							<a class='btn btn-danger' href='testimonial.php?delete=$data[Equip_ID]'>DENY</a>


						</td>";

						echo"</tr>";
					}
			echo "</tbody></table>";
		}

		public function viewCompletedData(){
			$con=$this->con();
			$sql= "SELECT * FROM `tbl_equipment_laptop` WHERE `quantity`= '0'";
			$data = $con->prepare($sql);
			$data->execute();
			$result = $data->fetchAll(PDO::FETCH_ASSOC);
			echo "<h3 class='banner pt-3'>Equipment_Laptops</h3>";
			echo "<table class='table table-dark table-striped '>";
			echo "<thead>
					<tr>
						<th>Equip_ID</th>
						<th>Name</th>
						<th>Description</th>
						
					</tr>
				</thead><tbody>";
					foreach ($result as $data){
						echo "<tr>";
						echo "<td>$data[Equip_ID]</td>";
						echo "<td>$data[Name]</td>";
						echo "<td>$data[description]</td>";
						
						

						echo"</tr>";
					}
			echo "</tbody></table>";
		}
	}
?>