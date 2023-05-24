import { Component, OnInit } from '@angular/core';
import { DriverService } from '../../auth/_services/driver.service';

@Component({
  selector: 'app-driver',
  templateUrl: './driver.component.html',
  styleUrls: ['./driver.component.css']
})
export class DriverComponent implements OnInit{

  drivers!:Array<any>;

  constructor(private driverService:DriverService )
  {

  }

  ngOnInit(): void {
    this.getDrivers();
  }

  getDrivers()
  {
    return this.driverService.getAll().subscribe((res:any) =>{
      this.drivers = res.drivers

    })
  }



}
