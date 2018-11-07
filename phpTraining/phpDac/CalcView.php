<!DOCTYPE html>
<html>
<head>
	<title>Math Calculator</title>
</head>
<body>
	<h1>Math Calc Program</h1>
	<form action="CalcProcess.php" method="POST">
		<p>
			Enter First Value:<input type="number" name="first"
		</p>
		<p>
			Enter Second Value:<input type="number" name="second">
		</p>
		<p>
			Choose: <select name="operation">
				<option>------SELECT-------</option>
				<option>Add</option>
				<option>Subtract</option>
				<option>Multiply</option>
				<option>Divide</option>
			</select>
		</p>
		<p>
			<button type="submit">Get Value</button>
		</p>
	</form>
</body>
</html>