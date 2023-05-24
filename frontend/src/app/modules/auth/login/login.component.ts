import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { AuthService } from '../_services/auth.service';
import { ActivatedRoute, Router } from '@angular/router';
import { TokenService } from '../_services/token.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit{
  loginForm!:FormGroup;
  hasErrors:Boolean = false;

  constructor(
    private fb:FormBuilder,
    private authService:AuthService,
    private router:Router,
    private activateRouter:ActivatedRoute,
    private tokenService:TokenService,
  )
  {

  }

  ngOnInit(): void {
    this.initForm()
  }

  initForm()
  {
    this.loginForm = this.fb.group({
      email:[
        null,
        Validators.compose([
          Validators.required,
          Validators.email,
          Validators.minLength(3),
          Validators.maxLength(191),

        ])
      ],
      password:[
        null,
        Validators.compose([
          Validators.required,
          Validators.minLength(8),
          Validators.maxLength(191),

        ])
      ]
    })
  }

  submit()
  {
    this.hasErrors = false;

    const data = this.loginForm.getRawValue()

    this.authService.login(data).subscribe((res:any) => {
      if(res.token)
      {
        this.tokenService.saveToken(res.token)
        this.router.navigate(['/secure'])
      }
    })

  }

}
