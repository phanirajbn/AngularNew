import { Component, OnInit } from '@angular/core';
import { EmpService } from '../emp.service';
import { Employee } from '../employee';

@Component({
  selector: 'app-rest-client',
  templateUrl: './rest-client.component.html',
  styleUrls: ['./rest-client.component.css']
})
export class RestClientComponent implements OnInit {
 public data =[];
 public valueId : number = 0;
 public valueName : string = "";
 public valueAddr : string = "";

  constructor(private myservice : EmpService) { }

  ngOnInit() {
  	this.myservice.getAll().subscribe(res=>{this.data = res});
  }

  insertRec(){
  	let emp = new Employee(this.valueId, this.valueName, this.valueAddr);
  	this.myservice.insert(emp).subscribe(res=>{
  		alert(res);
  		this.myservice.getAll().subscribe(res=>{this.data = res});		
  	})
  }
}
