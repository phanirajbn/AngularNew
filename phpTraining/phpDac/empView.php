<!DOCTYPE html>
<html>
<head>
	<title>Employee object creation Demo</title>
</head>
<body>
	<form action="empProcess.php" method="POST">
		<p>
			<label>Enter ID</label>
			<input type="number" name="empId"/>
		</p>
		<p>
			<label>Enter Name</label>
			<input type="text" name="empName"/>
		</p>
		<p>
			<label>Enter Email</label>
			<input type="email" name="empEmail"/>
		</p>
		<p>	
			<label>Enter Salary</label>
			<input type="number" name="empSalary"/>
		</p>
		<p>
			<button type="submit">Save</button>
		</p>
	</form>
</body>
</html>