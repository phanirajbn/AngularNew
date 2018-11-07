import { Component, OnInit, Output, EventEmitter } from '@angular/core';
import { Employee } from '../employee';

/*eventEmitter will be responsible for raising Events for a component and Output is used for Output directive*/

@Component({
  selector: 'app-new-emp',
  templateUrl: './new-emp.component.html',
  styleUrls: ['./new-emp.component.css']
})
export class NewEmpComponent implements OnInit {
public valueId: number;
public valueName : string;
public valueAddr : string;
public errorMsg : string;
@Output() onSave : EventEmitter<Employee> = new EventEmitter<Employee>();//This output will be an event Raise of the type Employee. It means that when the event is raised, the event handler will have a return type of Employee which is returned to the caller


  constructor() { }

  ngOnInit() {
  }
  //Raise the event in this function and return the data...
  setDetails(){
  	debugger;
  	var emp = new Employee(this.valueId, this.valueName, this.valueAddr);
  	this.onSave.emit(emp);//U R passing the newly created employee object as argument which will be used as return type for the caller. 
  }
}
