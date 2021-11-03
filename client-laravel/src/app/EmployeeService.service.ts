import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class EmployeeServiceService {

readonly APIUrl = "http://127.0.0.1:8000/api/employee";


httpOptions = {
  headers: new HttpHeaders({
  'Content-Type':  'application/json',
  })
};

constructor(private http:HttpClient) { }

  getEmployeeList():Observable<any[]>{
    return this.http.get<any>(this.APIUrl);
  }

}
