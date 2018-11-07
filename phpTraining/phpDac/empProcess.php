<?php require('classes.php') ?>
<?php 
	$empid = $_POST["empId"];
	$empName = $_POST["empName"];
	$empEmail = $_POST["empEmail"];
	$empSalary = $_POST["empSalary"];

	$empObj = new employee($empid, $empName, $empEmail, $empSalary);
	$empObj->display();
	/*foreach ($empObj as $key => $value) {
		echo $key . '=>'.$value;
	}*/
 ?>