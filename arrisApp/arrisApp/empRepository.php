
<?php 
	/**
	 * 
	 */
	class empRepository
	{
		private $collection = array();

		public function addEmployee($emp){
			array_push($this->collection, $emp);//add the emp object to the collection at the bottom of the list....
		}

		function updateEmp($emp){
			for ($i=0; $i < count($this->collection); $i++) { 
				if($this->collection[$i]->empId == $emp->empId){
					$this->collection[$i] = new employee($emp->empId,$emp->empName,$emp->empAddress,$emp->empSalary);
					return;
				}
			}
		}
		///////deletion code/////////////
        function deleteEmp($id){
        	$length = count($this->collection);
        	for ($i=0; $i < $length; $i++) { 
        		if($this->collection[$i]->empId == $empId){
					array_splice($this->collection, $i, 1);
					return;
				}
        	}
        }

        function getAll(){
        	return $this->collection;
        }
	}
 ?>