<?php require('fileIO.php') ?>
<?php 
	$id = $_POST["id"];
	$title = $_POST["title"];
	$cost = $_POST["price"];

	$obj = new book($id, $title, $cost);
	saveToFile($obj);
	echo "Book saved to the database";
 ?>
 <a href="bookingApp.php">Home</a>

