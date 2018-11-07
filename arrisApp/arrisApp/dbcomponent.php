<?php 
	function getConnection(){
		$servername = 'localhost';
		$dbName ="arrisDb";
		$username ='root';
		$password ='';

		$con = new mysqli($servername, $username, $password, $dbName);
		if(!$con){
			echo "Connection failed";
		}
		return $con;
	}

	class dbComponent{
		public function insertRecord($id, $name, $address, $salary){
			$con = getConnection();
			$query= sprintf("Insert into emptable values(%s, '%s','%s','%s')", $id, $name, $address, $salary);
			$con->query($query);
		}

		public function getAllRecords(){
			$con = getConnection();
			$query= "select * from emptable";
			$set = $con->query($query);
			return $set;	
		}
	}


 ?>