<?php

use App\Http\Controllers\TasksController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/tasks', [TasksController::class, 'index'])->name('tasks');
Route::post('/newtasks', [TasksController::class, 'store'])->name('newtasks');
Route::put('/updatetasks/{id}', [TasksController::class, 'update'])->name('updatetasks');
Route::delete('/deletetasks/{id}', [TasksController::class, 'destroy'])->name('deletetasks');

Route::post('/increment/{id}/{likes}', [TasksController::class, 'incrementa'])->name('increment');

Route::get('/whereId/{id}', [TasksController::class, 'allId'])->name('whereId');


/* 
URL Api
http://127.0.0.1:8000/increment/35/1
http: //127.0.0.1:8000/tasks
http: //127.0.0.1:8000/newtasks
http: //127.0.0.1:8000/updatetasks/5
http://127.0.0.1:8000/deletetasks/11 */


///searchById
Route::get('/users', [UserController::class, 'allUsers'])->name('users');
Route::get('/ById/{id}', [UserController::class, 'searchById'])->name('ById');
