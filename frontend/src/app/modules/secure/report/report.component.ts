import { Component, OnInit } from '@angular/core';
import { ReportService } from '../_services/report.service';

@Component({
  selector: 'app-report',
  templateUrl: './report.component.html',
  styleUrls: ['./report.component.css']
})
export class ReportComponent implements OnInit{

  reports!:Array<any>;

  constructor(private reportService:ReportService)
  {

  }

  ngOnInit(): void {
    this.getReport()
  }

  getReport()
  {
    this.reportService.getReport().subscribe((res:any) => {
      this.reports = res.reports
      console.log(res.reports);
    })
  }


}
