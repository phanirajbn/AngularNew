	<?php require('classes.php') ?>
	<?php 
		$name = $_POST['empname'];
		$addr = $_POST['empaddress'];
		$sal = $_POST['empsal'];

		$empObj = new employee($name, $addr, $sal);
		$empObj->display();
	 ?>