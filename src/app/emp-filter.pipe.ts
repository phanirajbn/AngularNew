import { Pipe, PipeTransform } from '@angular/core';
import { Employee } from './employee';

//pipes are filters that are used to transform the data into a  logical value on which the Component can interpret for its usage. 
//Angular has built in pipes for transforming boolean values, Currency, Data And Time and certain commom operations for text like Uppercase, Lower case and sentence case. 
//Over and above, developers create Custom pipes to filter the data or transform the data that is required for their programming logic....
@Pipe({
  name: 'empFilter'
})
export class EmpFilterPipe implements PipeTransform {
  transform(masterList: Employee[], search: string): Employee[] {
  		debugger;
  			if(search ==undefined)
  				return masterList;
  			else{
  				return masterList.filter(function(e){
  					return e.empName.toLowerCase().includes(search.toLowerCase());
  				})
  			}
	}
}
