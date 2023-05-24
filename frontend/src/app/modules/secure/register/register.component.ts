import { Component, OnInit } from '@angular/core';
import { RegisterService } from '../_services/register.service';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent implements OnInit {

  cities!: Array<any>;
  typeDocs!: Array<any>;
  registerForm!: FormGroup

  constructor(private registerService: RegisterService,
     private fb: FormBuilder,
     private router: Router
     ) {

  }

  ngOnInit(): void {
    this.getCities();
    this.getTypeDocs();
    this.initForm();

  }

  getCities() {
    this.registerService.cities().subscribe((res: any) => {
      this.cities = res.cities
    })
  }

  getTypeDocs() {
    this.registerService.typeDocs().subscribe((res: any) => {
      this.typeDocs = res.typeDocs
    })
  }

  initForm() {
    this.registerForm = this.fb.group({
      license_plate: [
        null,
        Validators.compose([
          Validators.required,
          Validators.minLength(3),
          Validators.maxLength(10),

        ])
      ],

      color: [
        null,
        Validators.compose([
          Validators.required,
          Validators.minLength(3),
          Validators.maxLength(10),

        ])
      ],

      brand: [
        null,
        Validators.compose([
          Validators.required,
          Validators.minLength(3),
          Validators.maxLength(50),

        ])
      ],

      type: [
        null,
        Validators.compose([
          Validators.required,
          Validators.minLength(3),
          Validators.maxLength(30),

        ])
      ],
      first_name: [
        null,
        Validators.compose([
          Validators.required,
          /*           Validators.pattern("[a-zA-Z][a-zA-Z ]+"), */
          Validators.minLength(3),
          Validators.maxLength(30),

        ])
      ],
      second_name: [
        null,
        Validators.compose([

          /*        Validators.pattern("[a-zA-Z][a-zA-Z ]+"), */
          Validators.minLength(3),
          Validators.maxLength(30),

        ])
      ],
      last_name: [
        null,
        Validators.compose([
          Validators.required,
          /*           Validators.pattern("[a-zA-Z][a-zA-Z ]+"), */
          Validators.minLength(3),
          Validators.maxLength(30),

        ])
      ],
      type_doc_id: [
        null,
        Validators.compose([
          Validators.required,
          /*           Validators.pattern("^[0-9]*$"), */
          Validators.minLength(1),
          Validators.maxLength(30),

        ])
      ],
      document: [
        null,
        Validators.compose([
          Validators.required,
          /*        Validators.pattern("^[0-9]*$"), */
          Validators.minLength(3),
          Validators.maxLength(12),

        ])
      ],

      direction: [
        null,
        Validators.compose([
          Validators.required,
          Validators.minLength(3),
          Validators.maxLength(30),

        ])
      ],

      phone: [
        null,
        Validators.compose([
          Validators.required,
          Validators.minLength(3),
          Validators.maxLength(30),

        ])
      ],

      city: [
        null,
        Validators.compose([
          Validators.required,
          Validators.minLength(1),
          Validators.maxLength(30),

        ])
      ],

      first_name_driver: [
        null,
        Validators.compose([
          Validators.required,
          /*           Validators.pattern("[a-zA-Z][a-zA-Z ]+"), */
          Validators.minLength(3),
          Validators.maxLength(30),

        ])
      ],
      second_name_driver: [
        null,
        Validators.compose([

          /*         Validators.pattern("[a-zA-Z][a-zA-Z ]+"), */
          Validators.minLength(3),
          Validators.maxLength(30),

        ])
      ],
      last_name_driver: [
        null,
        Validators.compose([
          Validators.required,
          /*        Validators.pattern("[a-zA-Z][a-zA-Z ]+"), */
          Validators.minLength(3),
          Validators.maxLength(30),

        ])
      ],
      type_doc_id_driver: [
        null,
        Validators.compose([
          Validators.required,
          /*          Validators.pattern("^[0-9]*$"), */
          Validators.minLength(1),
          Validators.maxLength(30),

        ])
      ],
      document_driver: [
        null,
        Validators.compose([
          Validators.required,
          /*         Validators.pattern("^[0-9]*$"), */
          Validators.minLength(3),
          Validators.maxLength(12),

        ])
      ],

      direction_driver: [
        null,
        Validators.compose([
          Validators.required,
          Validators.minLength(3),
          Validators.maxLength(30),

        ])
      ],

      phone_driver: [
        null,
        Validators.compose([
          Validators.required,
          Validators.minLength(3),
          Validators.maxLength(30),

        ])
      ],

      city_driver: [
        null,
        Validators.compose([
          Validators.required,
          Validators.minLength(1),
          Validators.maxLength(30),

        ])
      ],

    })
  }

  submit() {
    const data = this.registerForm.getRawValue();

    this.registerService.saveData(data).subscribe((res: any) => {
      if(res.message)
      {
        this.router.navigate(['/secure/reporte']);
      }
    })
  }






}
