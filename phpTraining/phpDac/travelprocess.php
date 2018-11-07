<?php 
	session_start();
	function __autoload($clasname){
		$filename = './' . $clasname.'.php';
		include_once($filename);
	}
 ?>

<?php 
	$myTravel = new Repository();

  	$date = $_GET["txtDate"];
	$desc = $_GET["txtDesc"];

	//create an object...
	$newTravel = null;
	//$tr = new travelogue($dest, )
	if(isset($_SESSION["data"])){
		echo "Into session";
		$myTravel = $_SESSION["data"];
		//$title, $desc, $date, $destination, $budget, $travelMode
		$myTravel->addNewDetail(new travelogue('Travel to Mysore is excellent', '12/12/2017','Mysore', 4500, 'Public Bus'));	
		$myTravel->addNewDetail(new travelogue('Travel to Chennai is excellent', '12/12/2017','Chennai', 4500, 'Public Bus'));	
		$myTravel->addNewDetail(new travelogue('Travel to Hyderabad is excellent', '12/12/2017','Hyderabad', 4500, 'Public Bus'));
		echo count($myTravel->getLatestTravelogue());
		$_SESSION["data"] = $myTravel;
	}else{
		echo "No Session";
		$_SESSION["data"] = $myTravel;
	}
	//$_SESSION["data"] = $myTravel;
	//$myTravel->addNewDetail($newTravel);
 ?>
 <a href="arrayCrudView.php">Home</a>