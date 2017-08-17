import { Component, OnInit } from '@angular/core';
import {UserService} from "../../services/user.service";
import {ActivatedRoute, Params, Router} from "@angular/router";
import {Task} from "../../models/task";
import {TaskService} from "../../services/task.service";

@Component({
    selector: 'app-task-edit',
    templateUrl: './task-edit.component.html',
    styleUrls: ['./task-edit.component.css'],
    providers: [UserService, TaskService]
})
export class TaskEditComponent implements OnInit {
    public pageTitle: string;
    public identity;
    public task: Task;
    public token;
    public statusTask;
    public loading;

    constructor(
        private _userService: UserService,
        private _taskService: TaskService,
        private _route: ActivatedRoute,
        private _router: Router
    ) {
        this.pageTitle = "Modificar tarea";
        this.identity = this._userService.getIdentity();
        this.token = this._userService.getToken();
    }

    ngOnInit() {
        if (this.identity == null && !this.identity.sub) {
            this._router.navigate(['/login']);
        }
        else {
            this.getTask();
        }
    }

    getTask() {
        this.loading = 'show';
        this._route.params.forEach((params: Params) => {
            let id = +params['id'];

            this._taskService.getTask(this.token, id).subscribe(
                response => {
                    //COMPROBAMOS SI ESTA TAREA PERTENECE AL USUARIO LOGUEADO
                    if (response.status == 'success') {
                        //COMPROBAMOS SI EL ID ES IGUAL AL QUE TENEMOS GUARDADO EN IDENTITY
                        if (response.data.user.id == this.identity.sub) {
                            //CARGANDO
                            this.loading = 'hide';
                            //PODEMOS VER LA TAREA
                            this.task = response.data;
                        }
                        else {
                            this._router.navigate(['/']);
                        }
                    }
                    else {
                        this._router.navigate(['/login']);
                    }
                },
                error => {
                    console.log(<any>error)
                }
            );
        });
    }

    onSubmit() {

        this._route.params.forEach((params: Params) => {
            let id = +params['id'];

            this._taskService.update(this.token, this.task, id).subscribe(
                response => {
                    this.statusTask = response.status;

                    if (this.statusTask != 'success') {
                        this.statusTask = 'error';
                    }
                    else {
                        this.task = response.data;

                        //REDIRECCIÓN
                        this._router.navigate(['/']);
                        //this._router.navigate(['/task', this.task.id]);
                    }
                },
                error => {
                    console.log(<any>error);
                }
            );
        });
    }

}
