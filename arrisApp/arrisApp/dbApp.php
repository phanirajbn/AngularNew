<!DOCTYPE html>
<html>
<head>
	<title>Db Application</title>
</head>
<body>
<?php require('dbComponent.php') ;?>

<h1>Employee system</h1>
<div style="display:inline-block;width: 45%;vertical-align: top;">
	<h2>Table of Employees</h2>
	<table border="1">
		<tr>
			<td>EmpID</td>
			<td>EmpName</td>
			<td>empAddress</td>
			<td>EmpSalary</td>
		</tr>
		<?php 
			$com = new dbComponent();
			$set = $com->getAllRecords();
			while ($row = $set->fetch_assoc()) {
				$r = sprintf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td>", $row["empId"],$row["empName"],$row["empAddress"],$row["empSalary"]);
				echo $r;
			}
		 ?>	
	</table>
</div>
<div style="display:inline-block;width: 45%;vertical-align: top;">
	<h2>Register new employee</h2>
	<form action="addemp_code.php" method="POST">
 		<p><input type="number" name="empid" placeholder="Enter the ID"></p>
 		<p><input type="text" name="empname" placeholder="Enter the Name"></p>
		<p><input type="text" name="empaddress" placeholder="Enter the Address"></p>
		<p><input type="text" name="empsal" placeholder="Enter the Salary"></p>
		<p><button type="submit">Save</button>
 	</form>	
</div>
</body>
</html>