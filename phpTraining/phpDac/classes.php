<?php 
	//Class to represent an Entity of UR Application:
   /**
    * The class represents the composite data type that store different types of data to be represented as a single unit
    * A Class needs an object thro which U could access the members of the class.
    * members of the class can be provided with access specifiers like private and public. 
    */
   class employee
   {
   	 //data is private:
   	private $empId;
   	private $empName;
   	private $empEmail;
   	private $empSalary;
   	//constructor
   	function employee($id, $name, $address, $salary){
   		$this->empId = $id;
   		$this->empName = $name;
   		$this->empEmail = $address;
   		$this->empSalary = $salary;
   	}

   	public function display(){
   		echo "The name entered is " . $this->empName.'<br/>';
   		echo "The Address entered is " . $this->empEmail.'<br/>';
   		echo "The Id entered is " . $this->empId.'<br/>';
   		echo "The Salary entered is " . $this->empSalary.'<br/>';
   	}
   }

   $empObj = new employee(123,'Phaniraj', 'phanirajbn@gmail.com', 56000);
   $empObj->display();
 ?>