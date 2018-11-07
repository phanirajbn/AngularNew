<?php 
	session_start();
	function __autoload($classname) {
	    $filename = "./". $classname .".php";
	    include_once($filename);
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Crud Demo</title>
 </head>
 <body>
 <h1>Employee Monitoring System</h1>
 <a href="#">Add New Employee</a>
 <a href="#">Display All Employees</a>
 <div class="addRec">
 	<form action="crudprocess.php" method="POST">
 		<p><input type="number" name="empid" placeholder="Enter the ID"></p>
 		<p><input type="text" name="empname" placeholder="Enter the Name"></p>
		<p><input type="text" name="empaddress" placeholder="Enter the Address"></p>
		<p><input type="text" name="empsal" placeholder="Enter the Salary"></p>
		<p><button type="submit">Save</button>
 	</form>
 </div>
 <div class="table">
 	<table border="1">
 		<tr>
 			<th>Employee ID</th>
 			<th>Employee Name</th>
 			<th>Employee Address</th>
 			<th>Employee Salary</th>
 			<th>Options</th>
 			<?php 
 					if(isset($_SESSION["data"])){
 						$collection = $_SESSION["data"];
 						$data =$collection->getAll();
 						//echo $data;
 						foreach ($data as $value) {
 							echo '<tr><td>'.$value->empId.'</td><td>';
 							echo $value->empName.'</td><td>';
 							echo $value->empAddress.'</td><td>';
 							echo $value->empSalary.'</td><td>';
 							echo '<a href="#">Edit</a></td></tr>';
 						}
 					}else{
 						echo "Session is not set";
 					}
 			 ?>
 		</tr>
 	</table>
 </div>
 </body>
 </html>