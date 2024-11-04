<?php

use App\Http\Controllers\HelloWorldController;
use Illuminate\Support\Facades\Route;

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
