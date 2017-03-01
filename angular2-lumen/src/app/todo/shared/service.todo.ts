import { Http,Response,Headers } from "@angular/http";
import { Injectable } from "@angular/core";
import "rxjs/add/operator/map";

@Injectable()
export class ServiceTodo {

    private url : string = "http://lumen-angular2.app/api/";

    constructor(private _http : Http){}

    getTodo(){
        return this._http.get(this.url+"todo-list")
            .map((response : Response) => response.json());
    }

    deleteTodo(id:number){
        return this._http.delete(this.url+"delete-todo/"+id);
            // .map((response : Response) => response.json());

        }
    editTodo(todo:any){
        const headers = new Headers({'Content-Type' : 'application/json'});
        return this._http.put(this.url+"update-todo/"+todo.id,todo,{headers : headers})
            .map((response : Response) => response.json());
    }





}
