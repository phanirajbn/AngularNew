<?php 
	session_start();
	function __autoload($classname) {
	    $filename = "./". $classname .".php";
	    include_once($filename);
	}
 ?><!DOCTYPE html>
<html>
<head>
	<title>Array Practical Example</title>
</head>
<body>

	<h1>Phani's Travelogue</h1>
	<div>
		<a href="">Show Latest</a>
		<a href="">Add New</a>
		<a href="">Find</a>
	</div>
	<div>
		<table border="1" id="tblData">
			<tr><th>Destination</th><th>Show</th></tr>
		<?php 
			if(isset($_SESSION["data"])){
				$collection = $_SESSION["data"];
				//echo $collection;
				$list = $collection->getLatestTravelogue();
				foreach ($list as $value) {
					echo $value->destination;
					$row = '<tr><td>'.$value->destination.'</td><td><a href="#">Edit</a></td></tr>';
					echo $row;
				}
			}else
			echo "Nothing is set";
	 	?>
		</table>
	</div>
	<div>
		<form action="travelprocess.php" method="GET">
		<h1>Add New Travel Details</h1>
		<p>
			<input type="text" name="txtDest" placeholder="Destination"/>	
		</p>
		<p>
			<input type="date" name="txtDate" placeholder="date"/>
		</p>
		<p>
			<input type="number" name="txtbudget" placeholder="budget"/>
		</p>
		<p><span>Choose the type</span>
			<select name="slType">
				<option>Public Bus</option>
				<option>Train</option>
				<option>Flight</option>
				<option>Hickhacking</option>
			</select>
		</p>
		<p>
			<label>Description not more than 500 charecters</label><br/>
			<textarea style="width: 60%; height: 200px;" name="txtDesc">
				
			</textarea>
		</p>
		<p>
			<button type="submit">Save changes</button>
		</p>
		</form>
	</div>
	<div></div>
</body>
</html>