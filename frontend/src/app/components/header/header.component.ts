import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TokenService } from 'src/app/modules/auth/_services/token.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-header',
/*   standalone: true,
  imports: [CommonModule], */
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent {
  constructor(private tokenService:TokenService, private router:Router)
  {

  }

  signOut()
  {
    this.tokenService.removeToken();
    this.router.navigate(['/login'])
  }
}
