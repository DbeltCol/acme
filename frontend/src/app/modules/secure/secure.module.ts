import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { SecureRoutingModule } from './secure-routing.module';
import { SecureComponent } from './secure.component';
import { HeaderComponent } from 'src/app/components/header/header.component';
import { SidebarComponent } from 'src/app/components/sidebar/sidebar.component';
import { DriverComponent } from './driver/driver.component';
import { OwnerComponent } from './owner/owner.component';
import { VehicleComponent } from './vehicle/vehicle.component';
import { RouterModule } from '@angular/router';
import { DashboardComponent } from './dashboard/dashboard.component';
import { ReportComponent } from './report/report.component';
import { RegisterComponent } from './register/register.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';



@NgModule({
  declarations: [
    SecureComponent,
    DriverComponent,
    OwnerComponent,
    VehicleComponent,
    HeaderComponent,
    SidebarComponent,
    DashboardComponent,
    ReportComponent,
    RegisterComponent,
  ],
  imports: [
    CommonModule,
    RouterModule,
    SecureRoutingModule,
    FormsModule,
    ReactiveFormsModule,


  ]
})
export class SecureModule { }
