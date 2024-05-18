<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('welcome');
});
Route::get("/",function(){
     echo "Hello World!";
     });

Route::get("home", function(){
     return "Home"; 
    });

Route::get("welcome", function(){
    return view("welcome")
    ;});

Route::get("user",[UserController::class,"index"]);

Route::get("user/1",[UserController::class,"show"]);

Route::get("user/{id}/edit",[UserController::class,"edit"])->name("user.edit");

Route::get("user/list/{page?}",[UserController::class,"list"])->name("user.list");

Route::get('/home',[HomeController::class, 'index'])->name('site.home');
Route::get('product',[ProductController::class, 'index'])->name('site.product');
Route::get('register',[RegisterController::class, 'index'])->name('site.register');