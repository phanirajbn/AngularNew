<?php 
//REST stands for Representational State Transfer(REST). The functions that U wish to expose to UR clients are made available using URLs and accessible thro HTTP. The HTTP verbs(GET,PUT, POST and DELETE) will act like methods to retrieve, Insert, Update and delete the data from the source. The data is transfered thro any format that contains the description and representation of it. JSON and XML are the most popular way of data transfer in REST. REST is a Concept that can be implemented in any technology that works on HTTP(NodeJs, ASP.NET, Java, PHP and many more) 
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');

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
//This variable gets the type of HTTP method that is used to access this page...
  $method = $_SERVER["REQUEST_METHOD"];
  switch ($method) {
  	case "POST"://Data insertions....	
			insert_emp();
			break;
  	case 'GET':
  		if(isset($_GET["id"])){
  			$id = intval($_GET["id"]);
  			get_employee($id);
  		}else
  		get_allEmployees();
  		break;
  	default:
  		# code...
  		break;
  }

  function insert_emp(){
  	$con = getConnection();
  	$data = json_decode(file_get_contents("php://input"), true);//gets the data from the body of the REQUEST....
  	$empid = $data["empId"];
  	$empname = $data["empName"];
  	$empAddress = $data["empAddress"];
  	$empSalary = $data["empSalary"];
  	$query = sprintf("INSERT INTO EMPTABLE VALUES('%s', '%s','%s','%s')", $empid, $empname,$empAddress, $empSalary);
  	//var_dump($query);
  	if($con->query($query)){
  		$response = array("status" =>1, "msg" => "Employee inserted");
  	}else
  		$response = array("status" =>-1, "msg" => "Employee insertion failed");
  echo json_encode($response);
}


function get_employee($id){
	$con = getConnection();
  	$query = "SELECT * FROM EMPTABLE WHERE EMPID=".$id;
  	$response = array();
  	$result = $con->query($query);
  	while($row = $result->fetch_assoc()){
  		$response[] = $row;
  	}
  	header('Content-Type: application/json');
  	echo json_encode($response);
}
  function get_allEmployees(){
  	$con = getConnection();
  	$query = "SELECT * FROM EMPTABLE";
  	$response = array();
  	$result = $con->query($query);
  	while($row = $result->fetch_assoc()){
  		$response[] = $row;
  	}
  	header('Content-Type: application/json');
  	echo json_encode($response);
  }
 ?>
