<?php 
/**
 * This class is used to represent employee entity.
 */
class employee
{
	public $empId;
	public $empName;
	public $empAddress;
	public $empSalary;
	function employee($id, $name, $address, $salary){
		$this->empId = $id;
		$this->empName = $name;
		$this->empAddress = $address;
		$this->empSalary = $salary;
	}

	public function display(){
		echo "The name is ". $this->empName.'<br/>';
		echo "The Address is ". $this->empAddress.'<br/>';
		echo "The Salary is ". $this->empSalary.'<br/>';
	}
}
 ?>