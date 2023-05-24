import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { SecureComponent } from './secure.component';
import { DriverComponent } from './driver/driver.component';
import { DashboardComponent } from './dashboard/dashboard.component';
import { OwnerComponent } from './owner/owner.component';
import { ReportComponent } from './report/report.component';
import { VehicleComponent } from './vehicle/vehicle.component';
import { RegisterComponent } from './register/register.component';

const routes: Routes = [
  {
    path:'',
    component:SecureComponent,
    children:[
      {
        path:'dashboard',
        component:DashboardComponent
      },
      {
        path:'conductores',
        component:DriverComponent
      },
      {
        path:'propietarios',
        component:OwnerComponent
      },
      {
        path:'reporte',
        component:ReportComponent
      },
      {
        path:'vehiculos',
        component:VehicleComponent
      },
      {
        path:'registros',
        component:RegisterComponent
      },
      {
        path:'',
        redirectTo:'dashboard',
        pathMatch:'full'

      },
      {
        path:'**',
        redirectTo:'dashboard',
        pathMatch:'full'
      }

    ]
  },



];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class SecureRoutingModule { }
