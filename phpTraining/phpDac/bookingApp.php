<?php require('fileIO.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			padding: 3px;
			margin: 3px;
		}
	</style>
</head>
<body>
	<div style="border: 1px solid blue; border-radius: 10px; width:85%">
		<form method="POST" action="bookingProcess.php">
			<input type="number" name="id">
			<input type="text" name="title">
			<input type="number" name="price">
			<button>Submit</button>
		</form>
	</div>
	<div>
		<table border="1">
			<tr><th>BookID</th><th>Book Title</th><th>Book Price</th></tr>
			<?php
				$rec = readFromFile();
				echo $rec;
		 	?>
		</table>
</body>
</html>