import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { URL_SERVICES } from 'src/app/config/config';

@Injectable({
  providedIn: 'root'
})
export class RegisterService {
  url!: string;
  constructor(private http: HttpClient) {
    this.url = `${URL_SERVICES}`;
  }

  cities() {
    return this.http.get(`${this.url}ciudades`);
  }

  typeDocs() {
    return this.http.get(`${this.url}tipo-documentos`);
  }

  saveData(data:any)
  {
    return  this.http.post(`${this.url}guardar-registro`,data)
  }
}
