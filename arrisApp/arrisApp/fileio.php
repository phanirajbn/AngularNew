<?php 
  require('employee.php');
	/*$name = "Aravind";
	$id = 123;
	$address = 'Bangalore';
	$salary = 65000;

	$emp = new employee($id, $name, $address, $salary);
	$file = fopen('Mydata.csv', 'a+');
	$line = sprintf("%s,%s,%s,%s", $id, $name,$address, $salary);
	fwrite($file, $line);
	fclose($file);*/

	$file = fopen('Mydata.csv', 'r');
	while(!feof($file)){
		$line = fgets($file);
		$words = explode(",",$line);
		$content = sprintf("<p><tr><td>%s</td><td>%s</td><td>%s</td></tr></p>", $words[0], $words[1], $words[2]);
		echo $content;
	}
	fclose($file);
 ?>