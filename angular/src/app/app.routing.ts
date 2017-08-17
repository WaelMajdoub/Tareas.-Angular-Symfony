import {ModuleWithProviders} from "@angular/core";
import {RouterModule, Routes} from "@angular/router";

import {LoginComponent} from "./components/login/login.component";
import {RegisterComponent} from "./components/register/register.component";
import {DefaultComponent} from "./components/default/default.component";
import {UserEditComponent} from "./components/user-edit/user-edit.component";
import {TaskNewComponent} from "./components/task-new/task-new.component";
import {TaskDetailComponent} from "./components/task-detail/task-detail.component";
import {TaskEditComponent} from "./components/task-edit/task-edit.component";

const  appRoutes: Routes = [
    {path:'', component: DefaultComponent},
    {path:'index', component: DefaultComponent},
    {path:'index/:page', component: DefaultComponent},
    {path:'login', component: LoginComponent},
    {path:'login/:id', component: LoginComponent},
    {path:'register', component: RegisterComponent},
    {path:'user-edit', component: UserEditComponent},
    {path:'task-new', component: TaskNewComponent},
    {path:'task/:id', component: TaskDetailComponent},
    {path:'task-edit/:id', component: TaskEditComponent},
    {path:'**', component: LoginComponent}
];

export const appRoutingProviders: any[] = [];
export const routing: ModuleWithProviders = RouterModule.forRoot(appRoutes);