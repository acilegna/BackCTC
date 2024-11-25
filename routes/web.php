<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tasks', [TasksController::class, 'index'])->name('tasks');
Route::post('/newtasks', [TasksController::class, 'store'])->name('newtasks');
Route::put('/updatetasks/{id}', [TasksController::class, 'update'])->name('updatetasks');
Route::delete('/deletetasks/{id}', [TasksController::class, 'destroy'])->name('deletetasks');

 
 
/* 
URL Api
http: //127.0.0.1:8000/tasks
http: //127.0.0.1:8000/newtasks
http: //127.0.0.1:8000/updatetasks/5
http://127.0.0.1:8000/deletetasks/11 */