import { Injectable } from '@angular/core';
import { Router } from '@angular/router';
import { HttpClient } from '@angular/common/http';
import { of } from 'rxjs';
import { catchError,map } from 'rxjs';
import { URL_SERVICES } from 'src/app/config/config';


@Injectable({
  providedIn: 'root'
})
export class AuthService {

  constructor(
    private http:HttpClient,
    private router:Router
  ) { }

  login(data:object)
  {
    let url = `${URL_SERVICES}login`;

    return this.http.post(url,data)

  }
}
