import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AuthGuard } from './modules/auth/_services/auth.guard';
import { RedirectGuard } from './modules/auth/_services/redirect.guard';

const routes: Routes = [
  {
    path:'auth',
    canActivate: [RedirectGuard],
    loadChildren: () => import('./modules/auth/auth.module').then(m => m.AuthModule),
  },

  {
    path:'secure',
    canActivate: [AuthGuard],
    loadChildren: () => import('./modules/secure/secure.module').then(m => m.SecureModule),
  },

  {
    path:'',
    redirectTo:'/dashboard',
    pathMatch:'full',
  },

  {
    path:'**',
    redirectTo:'/error/404',
  },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
