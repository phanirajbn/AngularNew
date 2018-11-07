<?php require('dbcomponent.php'); ?>
<?php 
	$com = new dbcomponent();
	$id = $_POST["empid"];
	$name = $_POST["empname"];
	$address = $_POST["empaddress"];
	$sal = $_POST["empsal"];
	$com->insertRecord($id, $name, $address, $sal);
	header("Location:dbApp.php");
 ?>