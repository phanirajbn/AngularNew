import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-calc',
  templateUrl: './calc.component.html',
  styleUrls: ['./calc.component.css']
})
export class CalcComponent {
  constructor() { }
  first: number = 123;	  
  second: number = 123;	  
  option: string = 'Add';
  result: number = this.first + this.second; 	  

  process(){
  	switch (this.option) {
  		case "Add":
  			this.result = this.first + this.second;
  			break;
  		case "Subtract":
  			this.result = this.first - this.second;
  			break; 		
  		default:
  			this.result = this.first - this.second;
  			break;
  	}
  }
}
