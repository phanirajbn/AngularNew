<?php 
	session_start();
	function __autoload($classname){
		$file = './'.$classname.".php";
		include_once($file);
	}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Session data</title>
	<link rel="stylesheet" type="text/css" href="Content/mainStyle.css">
</head>
<body>
	<h1>
	<form action="SessionProcess.php" method="POST">
		<div class="panel">
			<p>
				<input type="number" name="first" placeholder="Enter the first value"/>
				<select name="operand">
					<option>+</option>
					<option>-</option>
					<option>X</option>
					<option>/</option>
				</select>
				<input type="number" name="second" placeholder="Enter the second value"/>
				<button type="submit">=</button>
				<span name="spResult">
					<?php 
						if(isset($_SESSION["data"])){
							$result = $_SESSION["data"];
							echo $result;
							//session_unset();//removes all the session variables from the server.
						}
					 ?>
				</span>
			</p>
		</div>
		<div class="table">
			<table border="1">
			<?php 
				$content = null;
				if(isset($_SESSION["history"])){
					$result = $_SESSION["history"];
					echo count($result);
					foreach ($result as $key => $value) {
						$content ='<tr><td>' . $value->first . '</td>';
					echo $content;
					$content ='<td>' . $value->operand .'</td>';
					echo $content;
					$content ='<td>' . $value->second . '</td>';
					echo $content;
					$content ='<td>' . $value->result .'</td></tr>';
					echo $content;	
					}
					/*$content ='<tr><td>' . $result->first . '</td>';
					echo $content;
					$content ='<td>' . $result->operand .'</td>';
					echo $content;
					$content ='<td>' . $result->second . '</td>';
					echo $content;
					$content ='<td>' . $result->result .'</td></tr>';
					echo $content;*/
					//session_unset();//removes all the session variables from the server.
				}
			 ?>
			</table>
		</div>
	</form>
</body>
</html>