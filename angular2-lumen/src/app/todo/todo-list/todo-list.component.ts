import { Component, OnInit } from '@angular/core';
import {ServiceTodo} from "../shared/service.todo";
import {ModelTodo} from "../shared/model.todo";
@Component({
  selector: 'todo-list',
  templateUrl: './todo-list.component.html',
  styleUrls: ['./todo-list.component.scss'],
  providers: [ServiceTodo]
})
export class TodoListComponent implements OnInit {

  todoList: ModelTodo[] = [];
  constructor(private _httpService : ServiceTodo) { }

  ngOnInit() {
      this._httpService.getTodo()
        .subscribe(
            data => {
                this.todoList = data
            },
            error => {
                alert("Something wrong... "+ error)
            }
        )
  }

  edit(todo){
     this._httpService.editTodo(todo);
  }
  delete(todo){
       this._httpService.deleteTodo(todo.id)
            .subscribe(
                data => console.log(data)
            );
        let index = this.todoList.indexOf(todo);
        if(index >= 0){
            this.todoList.splice(index,1);
        }
  }

}
