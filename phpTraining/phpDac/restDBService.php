<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');

	function getConnection(){
		$servername='localhost';//The name of the server...
		$dbName = 'cdactraining';
		$username ='root';
		$password = '';//blank password;

		$con = new mysqli($servername, $username, $password, $dbName);
		return $con;
	}

	function getAll(){
		$con = getConnection();
		$query = "SELECT * FROM EMPTABLE";
		$result = $con->query($query);
		$records = array();
		while ($row = $result->fetch_assoc()) {
			$records[] = $row;
		};
		header('Content-Type: application/json');
		echo json_encode($records);
	}

	function getSingle($id){
		$con = getConnection();
		$query ="SELECT * FROM EMPTABLE WHERE EMPID=".$id;
		$result = $con->query($query);
		$response = array();
		while ($row = $result->fetch_assoc()) {
			$response[] = $row;
		}
		echo json_encode($response);
	}

	$method = $_SERVER["REQUEST_METHOD"];
	switch ($method) {
		case 'POST':
			echo "Code is posted";
			break;
		case "GET":
		 	if(isset($_GET["id"])){
		 		$id = intval($_GET["id"]);
		 		getSingle($id);
		 	}else
			 	getAll();
		 	break;
		default:
			# code...
			break;
	}
 ?>