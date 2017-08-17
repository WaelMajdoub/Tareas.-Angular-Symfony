import { Component, OnInit } from '@angular/core';
import {UserService} from "../../services/user.service";
import {ActivatedRoute, Router} from "@angular/router";
import {Task} from "../../models/task";
import {TaskService} from "../../services/task.service";

@Component({
    selector: 'app-task-new',
    templateUrl: './task-new.component.html',
    styleUrls: ['./task-new.component.css'],
    providers: [UserService, TaskService]
})
export class TaskNewComponent implements OnInit {
    public pageTitle: string;
    public identity;
    public task: Task;
    public token;
    public statusTask;

    constructor(
        private _userService: UserService,
        private _taskService: TaskService,
        private _route: ActivatedRoute,
        private _router: Router
    ) {
        this.pageTitle = "Crear nueva tarea";
        this.identity = this._userService.getIdentity();
        this.token = this._userService.getToken();
    }

    ngOnInit() {
        if (this.identity == null && !this.identity.sub) {
            this._router.navigate(['/login']);
        }
        else {
            this.task = new Task(1, '', '', 'new', 'null', 'null');
        }
    }

    onSubmit() {
        console.log(this.task);

        this._taskService.create(this.token, this.task).subscribe(
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
    }

}
