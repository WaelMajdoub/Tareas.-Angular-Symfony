import { Component, OnInit } from '@angular/core';
import {ActivatedRoute, Router, Params} from "@angular/router";
import {UserService} from "../../services/user.service";

@Component({
    selector: 'app-login',
    templateUrl: './login.component.html',
    styleUrls: ['./login.component.css'],
    providers: [UserService]
})
export class LoginComponent implements OnInit {
    public title: string;
    public user;
    public identity;
    public token;

    constructor(
        private _route: ActivatedRoute,
        private _router: Router,
        private _userService: UserService
    ) {
        this.title = 'Identifícate';
        this.user = {
            "email": "",
            "password": "",
            "getToken": "true"
        };
    }

    ngOnInit() {
        this.logOut();
        this.redirectIfIdentity();
    }

    onSubmit() {
        console.log(this.user);

        this._userService.signUp(this.user).subscribe(
            response => {
                this.identity = response;

                if (this.identity.length <= 1) {
                    console.log("error en el servidor");
                }
                if (!this.identity.status) {
                    //GUARDAMOS EN EL LOCALSTORAGE
                    localStorage.setItem('identity', JSON.stringify(this.identity));
                    //alert(JSON.parse(localStorage.getItem('identity')));

                    //GET TOKEN
                    this.user.getToken = null;
                    this._userService.signUp(this.user).subscribe(
                        response => {
                            this.token = response;

                            if (this.identity.length <= 1) {
                                console.log("error en el servidor");
                            }
                            if (!this.identity.status) {
                                //GUARDAMOS EN EL LOCALSTORAGE
                                localStorage.setItem('token', JSON.stringify(this.token));
                                //alert(JSON.parse(localStorage.getItem('token')));
                                window.location.href = "/";
                            }
                        },
                        error => {
                            console.log(<any>error);
                        }
                    );
                }
            },
            error => {
                console.log(<any>error);
            }
        );
    }

    logOut() {
        this._route.params.forEach((params: Params) => {
            let logOut = +params['id'];
            if (logOut == 1) {
                localStorage.removeItem('identity');
                localStorage.removeItem('token');

                this.identity = null;
                this.token = null;

                window.location.href = '/login';
            }
        })
    }

    redirectIfIdentity() {
        let identity = this._userService.getIdentity();
        if (identity != null && identity.sub) {
            this._router.navigate(["/"]);
        }
    }

}
