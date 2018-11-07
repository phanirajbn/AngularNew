import { Injectable } from '@angular/core';
import { Http, Headers, RequestOptions } from '@angular/http';
import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';

@Injectable({
  providedIn: 'root'
})
export class CstService {
  private url : string ='http://localhost:1234/getAll';

  constructor(private http : Http) { }

  getAllCustomers() : Observable<any>{	
  	return this.http.get(this.url).pipe(map(res=>{
  		let data = res.json();
  		return data;
  	}))
  }
}
