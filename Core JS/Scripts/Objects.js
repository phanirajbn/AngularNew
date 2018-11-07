//literal object

var emp = {};//create an object...
//add the members using .operator
emp.empID = 123;
emp.empName ="Phaniraj";
emp.empAddress ="Bangalore";
//UR object can have methods that is used to manipulate the data of the object...
emp.display = function(){
	var content = "Name: " + emp.empName;
	console.log(content);
}
emp.modifyName = function(name){
	emp.empName = name;
}
console.log(emp);
emp.display();//functions are called using ()
emp.modifyName("New Name");
emp.display()

//////////////////////Using Object constructor///////////////////
//JS uses a global object called Object which is invoked using new keyword. Every function would return an object....

var employee = function(id, name, address){
	this.empID = id;
	this.empName = name;
	this.empAddress = address;
	this.display  = function(){
		console.log("The Name: " + this.empName +"\tAddress: " + this.empAddress);
	}
}

var emp1 = new employee(123, 'Phaniraj','Bangalore')
emp1.display();
var emp2 = new employee(124, 'Vasu','Chennai')
emp2.display();
var emp3 = new employee(125, 'Shekar','Pune')
emp3.display();
var emp5 = new employee(126, 'Niraj','Mumbai')
emp5.display();