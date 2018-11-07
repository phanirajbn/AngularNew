<?php 
	session_start();  
	function __autoload($classname){
		$file = './'.$classname.".php";
		include_once($file);
	}
?>
<?php require('code.php') ?>
<?php 
	$first = $_POST["first"];
	$second = $_POST["second"];
	$operand = $_POST["operand"];
	$result = 0.0;
	switch ($operand) {
		case '+':
			$result = addFunc($first, $second);
			break;
		case "-":
			$result = subFunc($first, $second);
			break;
		default:
			$result = mulFunc($first, $second);
			break;
	}
	//echo "The added value is ". $result;
	$data = new operation($first, $second, $operand, $result);
	if(isset($_SESSION["history"])){
		$myArray =$_SESSION["history"];	
	}else{
		$myArray = array();
	}
	if(count($myArray) == 5)
		array_splice($myArray, 0, 1);//remove the first if the size is 5...
	array_push($myArray, $data);
	$_SESSION["history"] = $myArray;
	//echo $data->first . $data->result;
	$_SESSION["data"] = $data->result;
	header('Location:./Sessions.php');
 ?>