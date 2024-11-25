<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tasks', [TasksController::class, 'index'])->name('tasks');
Route::post('/newtasks', [TasksController::class, 'store'])->name('newtasks');
Route::put('/updatetasks/{id}', [TasksController::class, 'update'])->name('updatetasks');
Route::delete('/deletetasks/{id}', [TasksController::class, 'destroy'])->name('deletetasks');
