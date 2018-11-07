<!DOCTYPE html>
<html>
<head>
	<title>List of Employees</title>
</head>
<body>
	<h1>List of Employees</h1>
	<table border="1">
		<tr>
			<th>Employee Name</th>
		</tr>
		<?php 
		$contents = file_get_contents('data.json');//Get the JSON data
		$jsonContents = json_decode($contents, false);
		//If u want the json data to be available as composite/associative array, U should set it to true...
		//convert that to an Array of Objects...
		//print_r is used to print the object as it represents....
		//echo '<p>'. print_r($jsonContents, true) .'</p>';
		//Print the elements of the Array as it represents...
		for ($i=0; $i < count($jsonContents); $i++) { 
			$content = '<tr><td>' . $jsonContents[$i]->empName .'</td></tr>';
			echo $content;
		}
 ?>
	</table>
</body>
</html>
