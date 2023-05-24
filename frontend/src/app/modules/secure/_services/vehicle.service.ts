import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { URL_SERVICES } from 'src/app/config/config';

@Injectable({
  providedIn: 'root'
})
export class VehicleService {


  constructor(private http:HttpClient) { }

  getVehicles()
  {

    return this.http.get(`${URL_SERVICES}vehiculos`)
  }
}
