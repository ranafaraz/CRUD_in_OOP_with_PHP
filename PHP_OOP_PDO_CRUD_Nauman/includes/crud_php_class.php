
<?php 

	class Crud {

		public $db;

		public function __construct($db){

			$this->db = $db;
		}

		// function for: detid from the Database....

		public function getid($id){

			$stmt = $this->db->prepare("SELECT * FROM users WHERE id = :id");
			$stmt->execute(array(":id" =>$id));
			$editrow = $stmt->fetch(PDO::FETCH_ASSOC);
			return $editrow;

		}

		// function for: Update data in the Database....

		public function update($id,$name,$address){

			try {

				$stmt = $this->db->prepare("UPDATE users SET name = :name, address = :address WHERE id = :id");
				$stmt->bindparam(":id",$id);
				$stmt->bindparam(":name",$name);
				$stmt->bindparam(":address",$address);
				$stmt->execute();
				return true;

				
			} catch (Exception $e) {
				
				echo $e->getMessage();
				return false;
			}
			$stmt = $this->db->prepare("SELECT * FROM users WHERE id = :id");
			$stmt->execute(array(":id" =>$id));
			$editrow = $stmt->fetch(PDO::FETCH_ASSOC);
			return $editrow;

		}
		//function for: Delete data from Database....

		public function delete($id){

			$stmt = $this->db->prepare("DELETE FROM users WHERE id = :id");
			$stmt->bindparam(":id",$id);
			$stmt->execute();
			return true;
		}

		// function  for: Insert data in the Database....

		public function create($name,$address){

			try {

			$stmt = $this->db->prepare("INSERT INTO users (name,address) values (:name,:address)" );
			$stmt->bindparam(":name",$name);
			$stmt->bindparam(":address",$address);

			$stmt->execute();
			
			return true;
			
				
			} catch (Exception $e) {

				echo "Error:" . $e->getMessage();
				return false;
				
			}

			

		}

		// function for: View data from the Database....
		public function dataview($query){

			
			$stmt = $this->db->prepare($query);
			$stmt->execute();
			

				if ($stmt->rowCount() > 0) 
				{
					while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
					{		
			?>

			<tr>
				<td>
		 			<?php 

						if (isset($row['id']))

						{

							print ($row['id']);
						}
					?>
							
				</td>
				<td>
		 			<?php 

						if (isset($row['name']))

						{

							print ($row['name']);
						}
					?>
							
				</td>
				<td>
		 			<?php 

						if (isset($row['address']))

						{

							print ($row['address']);
						}
					?>
							
				</td>
				<td align="center">
		 			<a href="delete.php?id=<?php echo $row['id'];?>"><i class="glyphicon glyphicon-remove-circle"></i></a>
				</td>
				<td align="center">
		 			<a href="update.php?id=<?php echo $row['id'];?>"><i class="glyphicon glyphicon-edit"></i></a>
				</td>
			</tr>

			<?php
			}
		}
	}
}
?>