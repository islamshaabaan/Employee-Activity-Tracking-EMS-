<?php
	include_once('database.php');
  // Class for Employee Activities table

	class Employee extends Database{
		function __construct($code) {
			$sql = "SELECT * FROM Employees WHERE Code = $code;";
			$statement = Database::$db->prepare($sql);
			$statement->execute();
			$data = $statement->fetch(PDO::FETCH_ASSOC);
			if(empty($data)){return;}
			foreach ($data as $key => $value) {
				$this->{$key} = $value;
			}
		}

		

		//Displaying All Data from the Activities table 
		public static function DisplayAll() {
			
			$sql = "SELECT * FROM employees ";
			$statement = Database::$db->prepare($sql);
			$statement->execute();
			$employees = [];
			while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
				$employees[] = new Employee($row['Code']);
			}
			return $employees;
		}
		//Filtering All Data from the Activities table based on Activity Data only
		public static function FilterByActivity() {
			
			$sql = "SELECT Code,Title FROM employees";
			$statement = Database::$db->prepare($sql);
			$statement->execute();
			$employees1 = [];
			while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
				$employees1[] = new Employee($row['Code']);
			}
			return $employees1;
		}
		//Filtering All Data from the Activities table based on Employee Data only
		public static function FilterByEmployees() {
			
			$sql = "SELECT Code,Employee_Name FROM employees";
			$statement = Database::$db->prepare($sql);
			$statement->execute();
			$employees1 = [];
			while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
				$employees1[] = new Employee($row['Code']);
			}
			return $employees1;
		}
		//Filtering All Data from the Activities table based on Task Data only
		public static function FilterByTasks() {
			
			$sql = "SELECT Code,Task_Title FROM employees";
			$statement = Database::$db->prepare($sql);
			$statement->execute();
			$employees1 = [];
			while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
				$employees1[] = new Employee($row['Code']);
			}
			return $employees1;
		}
		//Filtering All Data from the Activities table based on Time Data only
		public static function FilterByTime() {
			
			$sql = "SELECT Code,Starting_time,Ending_time FROM employees";
			$statement = Database::$db->prepare($sql);
			$statement->execute();
			$employees1 = [];
			while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
				$employees1[] = new Employee($row['Code']);
			}
			return $employees1;
		}
		//Filtering All Data from the Activities table based on Status Data only
		public static function FilterByStatus() {
			
			$sql = "SELECT Code,Status FROM employees";
			$statement = Database::$db->prepare($sql);
			$statement->execute();
			$employees1 = [];
			while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
				$employees1[] = new Employee($row['Code']);
			}
			return $employees1;
		}
		
		
	}
?>