<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserCityController;

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::controller(UserController::class)->group(function(){

    Route::get('/userLoad', 'showUsers')->name('userLoad');

    Route::get('/user/{id}', 'singleuser')->name('view.user');

    // Route::view('/newuser','/adduser');
    
    Route::post('/adduser', 'adduser')->name('adduser');
    
    Route::put('/updateuser/{id}', 'updateuser')->name('updateuser');
    
    Route::get('/updatepage/{id}', 'updatepage')->name('update.page');
    
    Route::get('/deleteuser/{id}', 'deleteuser')->name('delete.user');
    
    
});

Route::controller(UserCityController::class)->group(function(){

    Route::get('/showcity', 'showCity')->name('loadcity');

    Route::get('/city/{id}', 'city')->name('view.city');

    Route::view('/newcity','/addcity');

    Route::post('/addcity', 'addnewcity')->name('addcity');

    Route::put('/updatecity/{id}', 'updatecity')->name('updatecity');
    
    Route::get('/updatecitypage/{id}', 'updatecitypage')->name('updatecity.page');

    Route::get('/deletecity/{id}', 'deletecity')->name('delete.city');

    // Route::get('citydropdown', 'showCitySelect')->name('dropdown.city');

    Route::get('/newuser','showCitySelect');
});




