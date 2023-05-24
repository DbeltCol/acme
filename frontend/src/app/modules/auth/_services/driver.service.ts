import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { URL_SERVICES } from 'src/app/config/config';

@Injectable({
  providedIn: 'root'
})
export class DriverService {

  constructor(private http: HttpClient) { }

  getAll() {
    let url = `${URL_SERVICES}`;

    return this.http.get(`${url}conductores`)
  }
}
