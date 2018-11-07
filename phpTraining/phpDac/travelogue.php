<?php 
 class travelogue{
 	public $destination;
 	public $travelDate;
 	public $description;
 	public $budget;
 	public $travelMode;

 	public function travelogue($desc, $date, $destination, $budget, $travelMode)
 	{
 		$this->destination = $destination;
 		$this->travelDate = $date;
 		$this->budget = $budget;
 		$this->description = $desc;
 		$this->travelMode = $travelMode;
 	}
 }
 ?>