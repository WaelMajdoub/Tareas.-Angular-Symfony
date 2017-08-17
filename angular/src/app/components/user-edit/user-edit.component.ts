import { Component, OnInit } from '@angular/core';
import {UserService} from "../../services/user.service";
import {User} from "../../models/user";
import {ActivatedRoute, Router, Params} from "@angular/router";

@Component({
    selector: 'app-user-edit',
    templateUrl: './user-edit.component.html',
    styleUrls: ['./user-edit.component.css'],
    providers: [UserService]
})
export class UserEditComponent implements OnInit {
    public title: string;
    public user: User;
    public status;
    public identity;
    public token;

    constructor(
        private _userService: UserService,
        private _route: ActivatedRoute,
        private _router: Router
    ) {
        this.title = "Modificar mis datos";
        this.identity = this._userService.getIdentity();
        this.token = this._userService.getToken();
    }

    ngOnInit() {
        if (this.identity == null) {
            this._router.navigate(['/login']);
        }
        else {
            this.user = new User(
                this.identity.sub,
                this.identity.role,
                this.identity.name,
                this.identity.surname,
                this.identity.email,
                this.identity.password
            );
        }
    }

    onSubmit() {
        this._userService.updateUser(this.user).subscribe(
            response => {
                this.status = response.status;
                console.log(response);
                if (this.status != 'success') {
                    this.status = 'error';
                }
                else {
                    localStorage.setItem('identity', JSON.stringify(this.user)); //Actualizamos el usuario logueado
                }
            },
            error => {
                console.log(<any>error);
            }
        );
    }
}
