<?php 
	function getConnection(){
		$servername='localhost';//The name of the server...
		$dbName = 'cdactraining';
		$username ='root';
		$password = '';//blank password;

		$con = new mysqli($servername, $username, $password, $dbName);
		if(!$con)
			echo "Connection failed";
		else
			echo "Connection Established";
		return $con;//
	}
	
	function getAllEmployees(){
		$con = getConnection();
		$query = "SELECT * FROM EMPTABLE";
		$result = $con->query($query);
		//echo $result;
		while($row = $result->fetch_assoc()){
			echo "<br>".$row["empName"]."<br/>".$row["empAddress"];
		}
	}

	function findEmp($id){
		$con = getConnection();
		$query ="SELECT * FROM EMPTABLE WHERE EMPID=".$id;
		$result = $con->query($query);
		while ($row = $result->fetch_assoc()) {
			echo "Record found: <br/>";
			echo $row["empId"] . "<br/>";
			echo $row["empName"]. "<br/>";
			echo $row["empAddress"]. "<br/>";
		}

	}

	function insertRec($id, $name, $address){
		$con = getConnection();
		$query = sprintf("INSERT INTO EMPTABLE values('%s','%s','%s')", $id, $name , $address);
		if($con->query($query)){
			echo "Employee inserted";
		}else{
			echo "Insertion failed";
		}
	}
	getAllEmployees();
//	findEmp(123);
//	insertRec(126,'Ramnath','Lucknow');
 ?>