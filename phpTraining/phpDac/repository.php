<?php 
 /**
  * 
  */
 class Repository
 {
 	private $info = array();//blank array...

 	public function addNewDetail($travel){
 		//work with an array like a Queue....
 		array_push($this->info, $travel);//adds the new item to the bottom of the List......
 	}

 	public function getLatestTravelogue(){
 		//$this->sort(($t)=> $t->travelDate);
 		return $this->info;
 	}

 	public function remove($dest){
 		for ($i=0; $i < count($this->info); $i++) { 
 			if($this->info[$i]->destination == $dest){
 				array_splice($this->destination, $i, 1);
 				return;
 			}
 		}
 	}

 	public function updateDetail($travel){
 		for ($i=0; $i < count($this->info); $i++) { 
 			if($this->info[$i]->destination == $travel->destination){
 				array_splice($this->destination, $i, 1, $travel);
 				return;
 			}
 		}	
 	}
 }
 ?>