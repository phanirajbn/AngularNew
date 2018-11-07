<h1>List of Fruits with us</h1>
<ul style="list-style: none">	
<?php 
	$fruits = array("Apple","Mango","Orange","PineApple");
	echo "Fruits Count: ".count($fruits);
	#iterating thro the array...
	foreach ($fruits as $key => $value) {
		echo '<li>'.$key . ':' .$value.'</li>';
	}
	#foreach is a better way of iterating a collection as it will always be within the bounds of the Array and will iterate by 1. It is always forward only and readonly. 
	echo "<p>Iterating thro a for loop</p>";
	for ($i=0; $i < count($fruits); $i++) { 
		echo "Fruit Name: " . $fruits[$i] ."<br/>";
	}//For loop can be  used for both reverse and forward iterations and can be even set with the no at which iteration is to happen. But there are chances that that the index can go out of bounds. 

  //Composite array where the index will be in the form of text and will be unique for the collection. The value for that index could be same or different. Index is called as KEY and the value set is called as VALUE. Hense KEY-VALUE pairs. 
	$empList = array("Phaniraj"=>55000, "Vinod"=>54000, "Kumar"=>45000);
	echo "Phaniraj earns a Salary of " . $empList["Phaniraj"]."</br>";

	foreach ($empList as $key => $value) {
		echo $key ." earns a salary of Rs. " . $value .'<br/>';	
	}

	//Storing objects in an Array...
	$emp = array(
		array(1, "Phaniraj",55000),
		array(2, "Suresh",45000),
		array(3, "Gopal",53000),
		array(4, "Venkatesh",35000),
		array(5, "Mahesh",56000)
	);

	for ($i=0; $i < count($emp); $i++) { 
		for ($j=0; $j < count($emp[$i]); $j++) { 
			echo $emp[$i][$j]. "<br/>";
		}
		echo "<p> </p>";
	}
 ?>
</ul>
<p>Please explore the following functions with arrays:<br/>
	<li>reset</li>
	<li>end</li>
	<li>count</li>
	<li>array_push</li>
	<li>array_pop</li>
	<li>array_merge</li>