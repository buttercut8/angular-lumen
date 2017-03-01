<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Todo;
use Auth;
class TodoController extends Controller
{
    public function getTodoList(){
        return $todo = Todo::all();
    }
    public function deleteTodo($id){
        return $id;
        // $todo = Todo::find($id)->delete();
        // return ['success' => 'Delete successful !'];
    }
    public function updateTodo($id){
        $todo = Todo::find($id);
        $todo->name = request()->name;
        $todo->description = request()->description;
        $todo->save();
        return ['success' => 'Update successful !'];
    }
    public function addTodo(){
        $todo = new Todo();
        $todo->name = request()->name;
        $todo->description = request()->description;
        $todo->images = request()->images;
        $todo->user_id = request()->user_id;
        $todo->save();
        return ['success' => 'Add successful !'];
    }


}
