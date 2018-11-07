import { Component } from '@angular/core';
import { CstService } from './cst.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  public allRecords :any;

  constructor(private cstservice : CstService) {
  	this.cstservice.getAllCustomers().subscribe(res=>{
  		this.allRecords = res;
  	})
  }
}
