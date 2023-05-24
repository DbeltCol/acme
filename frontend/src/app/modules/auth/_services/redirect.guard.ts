import { Injectable } from '@angular/core';
import { ActivatedRouteSnapshot, CanActivate, Router, RouterStateSnapshot, UrlTree } from '@angular/router';
import { Observable } from 'rxjs';
import { TokenService } from './token.service';

@Injectable({
  providedIn: 'root'
})
export class RedirectGuard implements CanActivate {
  constructor(
    private tokenService:TokenService,
    private router:Router
  )
  {

  }

  canActivate():boolean{
    const token = this.tokenService.getToken();

    if(token){
      this.router.navigate(['/secure'])
      return false;
    }

    return true;
  }

}
