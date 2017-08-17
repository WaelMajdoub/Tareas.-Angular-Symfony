import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { LoginComponent } from './components/login/login.component';
import { RegisterComponent } from './components/register/register.component';
import { FormsModule } from "@angular/forms";
import { HttpModule } from "@angular/http";
import {appRoutingProviders, routing} from "./app.routing";
import { DefaultComponent } from './components/default/default.component';
import { UserEditComponent } from './components/user-edit/user-edit.component';
import { TaskNewComponent } from './components/task-new/task-new.component';
import { TaskDetailComponent } from './components/task-detail/task-detail.component';
import { TaskEditComponent } from './components/task-edit/task-edit.component';
import { GenerateDatePipe } from './pipes/generate-date.pipe';

@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
    RegisterComponent,
    DefaultComponent,
    UserEditComponent,
    TaskNewComponent,
    TaskDetailComponent,
    TaskEditComponent,
    GenerateDatePipe,
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule,
    routing
  ],
  providers: [
    appRoutingProviders
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
