<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});


$app->group(['prefix' => 'api','middleware' => 'cors'],function() use ($app){
    $app->get('todo-list',[
        'uses' => 'TodoController@getTodoList',
        'as' => 'get.todo.list',
    ]);
    $app->post('add-todo',[
        'uses' => 'TodoController@addTodo',
        'as' => 'add.todo',
    ]);
    $app->put('update-todo/{id}',[
        'uses' => 'TodoController@updateTodo',
        'as' => 'update.todo',
    ]);
    $app->delete('delete-todo/{id}',[
        'uses' => 'TodoController@deleteTodo',
        'as' => 'delete.todo',
    ]);
});
