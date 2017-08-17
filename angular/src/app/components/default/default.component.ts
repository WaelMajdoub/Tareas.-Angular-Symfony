import { Component, OnInit } from '@angular/core';
import {ActivatedRoute, Router, Params} from "@angular/router";
import {UserService} from "../../services/user.service";
import {TaskService} from "../../services/task.service";
import {Task} from "../../models/task";

@Component({
    selector: 'app-default',
    templateUrl: './default.component.html',
    styleUrls: ['./default.component.css'],
    providers: [UserService, TaskService]
})
export class DefaultComponent implements OnInit {
    public title: string;
    public identity;
    public token;
    public tasks: Array<Task>;
    public pages;
    public pagePrev;
    public pageNext;
    public loading;
    public filter = 0;
    public order = 0;
    public searchString;

    constructor(
        private _route: ActivatedRoute,
        private _router: Router,
        private _userService: UserService,
        private _taskService: TaskService
    ) {
        this.title = 'Homepage';
        this.identity = this._userService.getIdentity();
        this.token = this._userService.getToken();
    }

    ngOnInit() {
        this.getAllTasks();
    }

    getAllTasks() {
        this._route.params.forEach((params: Params) => {
            let page = +params['page']; //PASAMOS A INT EL PAGE QUE NOS LLEGA POR LA URL

            if (!page) {
                page = 1;
            }

            //CARGANDO
            this.loading = 'show';

            this._taskService.getTasks(this.token, page).subscribe(
                response => {
                    if (response.status == 'success') {
                        this.tasks = response.data;
                        this.loading = 'hide';

                        //TOTAL PÁGINAS
                        this.pages = [];
                        for (let i = 0; i < response.totalPages; i++) {
                            this.pages.push(i);
                        }

                        //PÁGINA ANTERIOR
                        if (page >= 2) {
                            this.pagePrev = (page - 1);
                        }
                        else {
                            this.pagePrev = page;
                        }

                        //PÁGINA SEGUIENTE
                        if (page < response.totalPages) {
                            this.pageNext = (page + 1);
                        }
                        else {
                            this.pageNext = page;
                        }
                    }
                },
                error => {
                    console.log(<any>error);
                }
            );
        });
    }

    search() {
        this.loading = 'show';

        //PONEMOS SEARCH A NULL
        if (!this.searchString || this.searchString.trim().length == 0) {
            this.searchString = null;
        }

        console.log(this.filter);
        console.log(this.order);
        console.log(this.searchString);

        this._taskService.search(this.token, this.searchString, this.filter, this.order).subscribe(
            response => {
                if (response.status == 'success') {
                    this.tasks = response.data;
                    this.loading = 'hide';
                }
                else {
                    this._router.navigate(['/index']);
                }
            },
            error => {
                console.log(<any>error);
            }
        );
    }

}
