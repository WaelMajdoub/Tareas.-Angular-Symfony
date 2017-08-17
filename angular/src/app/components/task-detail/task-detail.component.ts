import { Component, OnInit } from '@angular/core';
import {UserService} from "../../services/user.service";
import {TaskService} from "../../services/task.service";
import {ActivatedRoute, Params, Router} from "@angular/router";

@Component({
    selector: 'app-task-detail',
    templateUrl: './task-detail.component.html',
    styleUrls: ['./task-detail.component.css'],
    providers: [
        UserService,
        TaskService
    ]
})
export class TaskDetailComponent implements OnInit {
    public identity;
    public token;
    public task;
    public loading;

    constructor(
        private _userService: UserService,
        private _taskService: TaskService,
        private _route: ActivatedRoute,
        private _router: Router
    ) {
        this.identity = this._userService.getIdentity();
        this.token = this._userService.getToken();
    }

    ngOnInit() {
        if (this.identity && this.identity.sub) {
            //LLAMADA AL SERVICIO DE TAREAS PARA MOSTRAR UNA
            //LLAMADA AL MÉTODO
            this.getTask();
        }
        else {
            this._router.navigate(['/login']);
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
                            //this._router.navigate(['/']);
                            console.log(response.data.user.id);
                            console.log(this.identity.sub);
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

    deleteTask(id) {
        this._taskService.deleteTask(this.token, id).subscribe(
            response => {
                //COMPROBAMOS SI ESTA TAREA PERTENECE AL USUARIO LOGUEADO
                if (response.status == 'success') {
                    //REDIRIGIR A PÁGINA PRINCIPAL
                    this._router.navigate(['/']);
                }
                else {
                    alert("No se ha borrado la tarea");
                }
            },
            error => {
                console.log(<any>error)
            }
        );
    }

}
