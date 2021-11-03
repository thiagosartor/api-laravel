import { Component, OnInit } from '@angular/core';
import { EmployeeServiceService } from '../EmployeeService.service';

@Component({
  selector: 'app-list-employee',
  templateUrl: './list-employee.component.html',
  styleUrls: ['./list-employee.component.css']
})
export class ListEmployeeComponent implements OnInit {

  public EmployeeList: any = [];

  constructor(private service: EmployeeServiceService) {

  }

  ngOnInit(): void {
    this.refreshEmployeeList();
  }

  refreshEmployeeList(){
    this.service.getEmployeeList().subscribe(
      data => {
        this.EmployeeList = data;
        console.log(data);
      }, (error: any) => {
        console.error(error);
      }
    );
  }
}
