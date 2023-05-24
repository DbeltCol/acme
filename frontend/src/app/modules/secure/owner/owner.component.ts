import { Component, OnInit } from '@angular/core';
import { OwnerService } from '../../auth/_services/owner.service';

@Component({
  selector: 'app-owner',
  templateUrl: './owner.component.html',
  styleUrls: ['./owner.component.css']
})
export class OwnerComponent implements OnInit{
  owners!:Array<any>;
  constructor(private ownerService:OwnerService)
  {

  }

  ngOnInit(): void {
    this.getOwners();
  }

  getOwners()
  {
    return this.ownerService.getAll().subscribe((res:any) =>{
      this.owners = res.owners

    })
  }
}
