<?php 
//REST service stands for representational State transfer. The service is a set of operations/functions that are accessed by users across platforms and devices(Web). HTTP is the most common approach of data transfer. Using the verbs of HTTP:GET, POST, PUT and DELETE we could do operations thro the service. Services will be server side code and Applications irrespective of the technology and platform will consume these services where the data will be in the form of XML or JSON.

header('Content-Type:application/json');

$contents = file_get_contents('data.json');//Get the JSON data
$jsonContents = json_decode($contents, false);


$httpMethod = $_SERVER["REQUEST_METHOD"];//Get the type of method used to interact with this URL...
switch ($httpMethod) {
  	case 'GET':
  		if(isset($_GET["id"])){
  			$id = intval($_GET["id"]);
  			$rec = getRecord($id);
  			echo json_encode($rec);
  		}else{
  		echo json_encode($jsonContents);
  		}
  		break;
	case 'POST':

  		break;
	case 'PUT':

		break;
  	case 'DELETE':

  		break;
  }  

 function getRecord($id){
	$contents = file_get_contents('data.json');//Get the JSON data
	$jsonContents = json_decode($contents, false);
 	$length = count($jsonContents);
  	for ($i=0; $i < $length; $i++) { 
  		if($jsonContents[$i]->empID == $id)
  			return $jsonContents[$i];
  	}
  	return null;
  }
?>
