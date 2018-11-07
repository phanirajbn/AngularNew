<?php 
	require('code.php');
	$first = $_POST["first"];
	$second = $_POST["second"];
	$operation = $_POST["operation"];
	switch ($operation) {
		case 'Add':
			# code...
			$result = addFunc($first, $second);
			break;
		case "Subtract":
			$result = subFunc($first ,$second);
			break;		
		default:
			$result = $first * $second;
			break;
	}
	//header("Location: calcDemo.php");//Use this to redirect to other page....
	echo "The result of this operation is ". $result;
 ?>
<a href="calcDemo.php">Go Back</a>