<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/userLoad', [UserController::class,'showUsers'])->name('userLoad');

Route::get('/user/{id}', [UserController::class,'singleuser'])->name('view.user');

Route::get('/adduser', [UserController::class,'adduser']);

Route::get('/updateuser', [UserController::class,'updateuser']);

Route::get('/deleteuser/{id}', [UserController::class,'deleteuser'])->name('delete.user');
