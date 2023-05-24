import { Component, OnInit } from '@angular/core';
import { VehicleService } from '../_services/vehicle.service';

@Component({
  selector: 'app-vehicle',
  templateUrl: './vehicle.component.html',
  styleUrls: ['./vehicle.component.css']
})
export class VehicleComponent implements OnInit {

  vehicles!:Array<any>;

  constructor(private vehicleService:VehicleService)
  {

  }

  ngOnInit(): void {
    this.getVehicles();
  }

  getVehicles()
  {
    this.vehicleService.getVehicles().subscribe((res:any) => {
      this.vehicles = res.vehicles
    })
  }



}
