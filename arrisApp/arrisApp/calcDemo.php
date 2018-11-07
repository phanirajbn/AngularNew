<!DOCTYPE html>
<html>
<head>
	<title>Calc Program</title>
</head>
<body>
	<h1>Math Calc Program</h1>
	<form action="calcResult.php" method="POST">
			<p>
				Enter First Value:<input type="number" name="first">
			</p>
			<p>
				Enter Second Value:<input type="number" name="second">
			</p>
			<p>
				Choose:<select name="operation">
					<option>---SELECT---</option>
					<option>Add</option>
					<option>Subtract</option>
					<option>Multiply</option>
					<option>Divide</option>
				 </select>
			</p>
			<button type="submit">Get Value</button>
	</form>
</body>
</html>