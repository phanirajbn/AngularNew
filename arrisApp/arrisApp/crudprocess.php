<?php 
	session_start();
	function __autoload($classname) {
	    $filename = "./". $classname .".php";
	    include_once($filename);
	}
 ?>
<?php 
 	$id = $_POST["empid"];
 	$name = $_POST["empname"];
 	$address = $_POST["empaddress"];
 	$sal = $_POST["empsal"];
 	$empObj = new employee($id, $name, $address,$sal);
 	if(isset($_SESSION["data"])){
 	$collection = $_SESSION["data"];
 }else
 {
 	$collection = new empRepository();
 }
 	$collection->addEmployee($empObj);
 	
 	//U store this data in the session....
 	$_SESSION["data"] = $collection;
 	header("Location:./ArrayCrud.php"); //redirect to the page...
 ?>





