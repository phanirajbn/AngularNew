import { Injectable } from '@angular/core';
import {Http, Headers, RequestOptions } from '@angular/http';
import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';

//A service in Angular is a class with attribute called Injectable which means that this class could act like a dependency to one or more components of the Application so that they could share the data that is obtained thro this service. 
//If U want a set of functions that needs to be commonly used in multiple components of the Application, U should do this with an Angular Service. 

@Injectable()
export class EmpService {
	private url : string ='http://localhost:1234';
//The REST services are asynchronous and needs ajax kind of Operations to be conducted thro Angular, so when an ajax call is made to the REST Service, it returns a Observable object which internally waits for the data to be retrieved from the service and invokes a function on the success of the request made. 

  constructor(private http: Http) { }

  getAll() : Observable<any>{
  	return this.http.get(this.url).pipe(map(res=>{
  		return res.json();
  	}))
  }

  get(id) : Observable<any>{
  	return this.http.get(this.url +"/" + id).pipe(map(res=>{
  		let data = res.json();
  		return data;
  	}));
  }

  insert(emp: any):  Observable<any>{
  		console.log(emp);
  		var input = JSON.stringify(emp);
  		let headers = new Headers({'Content-type':'application/json'});
  		let options = new RequestOptions({headers : headers});
  		//return this.http.post(this.url, input, options).map(res=>{
  		//	console.log(res);
  		//}
  		return this.http.post(this.url, input, options).pipe(map(res=>{
  			console.log(res);
  			return res;
  		}));
  }
}
