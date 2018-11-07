<!DOCTYPE html>
<html>
<head>
	<title>First PHP Page...</title>
</head>
<body>
	<h1>php Tutorial</h1>
	<p>
		PHP is similar to HTML in terms of Tag and UI creations. Processing of the Page happens inside the WAMP(Apache Server). As the processing happens in the Server, this is called as Server side programming..
		<?php 
			eChO "<br/>Testing 123<br/>";
			#php is not case sensitive. Every statement has to be ended with a ; 
			ECHO "This will also work<br/>";

			$first = 123;
			$second = 234;
			echo "The Added value of first and second is " . ($first + $second);

			$name ="Phaniraj";
			$address ="Bangalore";
			$age = 41;
			$retirement = 60-$age;
			#To concatinate in php we use .
			echo "The Name is " . $name ."<br/>The Address is " . $address . "<br/>The Age is " . $age ."<br/>His retirement is still " . $retirement ." years from now"; 
		 ?>
	</p>
	echo is a language construct used to display content on the Browser. It takes the data to display as a string within the quotes. <br/>
	<a href="Home.php">Home</a>
</body>
</html>