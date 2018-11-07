<h1>List of fruits with us</h1>
<ul>
<?php 
	$fruits = array("Apple","Mango","Orange","Grapes" );
	echo "Fruits count: " . count($fruits);
	foreach ($fruits as $key) {
		echo '<li>'.$key.'</li>';
	}

	$empList = array("Phaniraj" => 55000, "Vinod"=>54000);
	echo "Phaniraj earns ". $empList["Phaniraj"]."<br/>";
	foreach ($empList as $key => $value) {
		echo $key. " earns " .$value ." per month<br/>";
	}

	$emp = array
	(
		array(1, "Vinod", 50000),
		array(2, "Phaniraj", 40000),
		array(3, "Banu Prakash", 60000),
		array(4, "Joydip", 30000)
	);

	for ($i=0; $i < count($emp); $i++) { 
		for ($j=0; $j < count($emp[$i]); $j++) { 
			echo $emp[$i][$j]. " ";
		}
		echo "<br/>";
	}
 ?>
</ul>








