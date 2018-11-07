import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';

import { AppComponent } from './app.component';
import { CalcComponent } from './calc/calc.component';
import { EmpRepositoryComponent } from './emp-repository/emp-repository.component';
import { Employee } from './employee';
import { EmpDetailComponent } from './emp-detail/emp-detail.component';
import { NewEmpComponent } from './new-emp/new-emp.component';
import { EmpFilterPipe } from './emp-filter.pipe';
import { RestClientComponent } from './rest-client/rest-client.component';
import { EmpService } from './emp.service';


@NgModule({
  declarations: [
    AppComponent,
    CalcComponent,
    EmpRepositoryComponent,
    EmpDetailComponent,
    NewEmpComponent,
    EmpFilterPipe,
    RestClientComponent
  ],
  imports: [
    BrowserModule, FormsModule, HttpModule
  ],
  providers: [EmpService],
  bootstrap: [AppComponent]
})
export class AppModule { }
