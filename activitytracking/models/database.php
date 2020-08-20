<?php
	class Database {
		protected static $db = null;
		
		public static function connect($database, $uid, $pwd) {
			if(!empty(Database::$db)) return;
			$servername = "localhost";
			$username = "islam";
			$password = "1234";

			$dsn = "mysql:host=$servername;dbname=$database";
			
			try {
		   		Database::$db = new PDO($dsn, $username, $password);
		   		// I did a database in PHPMyAdmin but if u want to make it here here is the code below.

		   		/*$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  				$sql = "CREATE DATABASE Empolyees";
  				// use exec() because no results are returned
 				$db->exec($sql);
  				echo "Database created successfully<br>";
  				$sql = "CREATE TABLE Employees (
  					Code INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  					Title VARCHAR(30) NOT NULL,
  					Task_Title VARCHAR(30) NOT NULL,
  					Employee_Name VARCHAR(50),
  					Customer_Name VARCHAR(50),
  					Starting_time TIMESTAMP,
  					Ending_time TIMESTAMP,
  					Status VARCHAR(30)
  				)";

 		 		// use exec() because no results are returned
  				$db->exec($sql);
  				echo "Table Employees created successfully";

				*/

			} catch(PDOException $e){
		   		echo $e->getMessage();
			}
		}
		
		//Get certain Field
		public function get($field) {
			if(isset($this->{$field}))
				return $this->{$field};
			return null;
		}
		
	}
?>