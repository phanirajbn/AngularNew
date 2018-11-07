<?php 
	#load the code file so that we could use those functions
   require('Code.php');#load external files.....
   $first = $_POST["first"];
   $second = $_POST["second"];
   $operation = $_POST["operation"];
   switch ($operation) {
   	case 'Add':
   	$result = addFunc($first, $second);
   		break;
   	default:
   		$result = mulFunc($first, $second);
   		break;
   }
   echo "The Result of this operation: ". $result;
 ?>

 <a href="CalcView.php">Back</a>