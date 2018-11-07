import { Component, OnInit, Input } from '@angular/core';
import { Employee } from '../employee';
@Component({
  selector: 'app-emp-detail',
  templateUrl: './emp-detail.component.html',
  styleUrls: ['./emp-detail.component.css']
})
export class EmpDetailComponent implements OnInit {
  @Input()  selectedEmp : Employee	
  constructor() { }

  ngOnInit() {
  }

}
