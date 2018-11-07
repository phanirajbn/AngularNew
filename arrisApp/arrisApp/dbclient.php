<?php 
	function connect(){
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

	function getAllRecords(){
		$con = connect();
		$statement = "SELECT * FROM EMPTABLE";
		$records = $con->query($statement);
		if($records->num_rows >0){
			while ($row =$records->fetch_assoc()) {
				$line = sprintf("%s, %s, %s", $row["empId"], $row["empName"], $row["empAddress"]);
				echo $line;
			}
		}
	}

	function insertRecord(){
		$con = connect();
		$statement ="Insert into emptable values(2,'Suresh','Mysore',45000)";
	    if($con->query($statement) === TRUE){
	    	echo "insertion done";
	    }else{
	    	echo "Error: ". $con->error;
	    }	
	}
	insertRecord();
	//getAllRecords();
 ?>