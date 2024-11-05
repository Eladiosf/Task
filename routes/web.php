<?php

use App\Http\Controllers\HelloWorldController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/hello-world', function () {
//    return 'Hello World';
//});

//Route::get('/hello-world', function () {
//    return view('hello-world');
//});

//Route::get('/hello-world', function () {
//    return view('hello-world',[
//        'text'=>'Hello World',
//    ]);
//});

//Route::get('/hello-world', [HelloWorldController::class,'index']);

// Conecta con nuestra Base de Datos tasks y lo limita a ver 10 registros
//Route::get('/tasks', function () {
//    $tasks=\App\Models\Task::take(10)->get();
//    $tasks=\App\Models\Task::all();   && Vemos todos los registros
//
//    dd($tasks);
//});Route::get('tasks', [TaskController::class, 'index'])->name('tasks.index');//Route::get('tasks/create', [TaskController::class, 'create'])->name('tasks.create');//Route::post('tasks', [TaskController::class, 'store'])->name('tasks.store');//Route::get('tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');//Route::put('tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');//Route::patch('tasks/{task}/toggle', [TaskController::class, 'toggle'])->name('tasks.toggle');//Route::delete('tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

Route::get('tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::patch('tasks/{task}/toggle', [TaskController::class, 'toggle'])->name('tasks.toggle');
Route::delete('tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
