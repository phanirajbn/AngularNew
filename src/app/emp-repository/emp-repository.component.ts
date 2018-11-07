import { Component, OnInit } from '@angular/core';
import { Employee } from '../employee';
import { EmpFilterPipe } from '../emp-filter.pipe';

@Component({
  selector: 'app-empDemo',
  templateUrl: './emp-repository.component.html',
  styleUrls: ['./emp-repository.component.css']
})
export class EmpRepositoryComponent implements OnInit {
  public empList : Employee[] = [];//blank Array....
  selectedEmp : Employee;
  newId : number = 0;
  newName : string = "";
  newAddr : string = "";

  constructor() {
  	this.empList.push(new Employee(123, 'Phaniraj', 'Bangalore'));
  	this.empList.push(new Employee(124, 'Banu Prakash', 'Bangalore'));
  	this.empList.push(new Employee(125, 'Murali Sharma', 'Tumkur'));
  	this.empList.push(new Employee(126, 'Vinod Kumar', 'Shimoga'));
   }

  ngOnInit() {
  }

  displayRec(emp:Employee){
		this.selectedEmp = new Employee(emp.empId, emp.empName, emp.empAddress);
	}

	addNewEmp(event){
		debugger;
		/*
			first demo of single component to use this function for adding
			let emp = new Employee(this.newId, this.newName, this.newAddr);
		*/
		console.log(event);
		this.empList.push(event);
		alert("Employee added successfully");
	}
}
