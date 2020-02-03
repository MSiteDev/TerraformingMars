<?php

use App\Http\Controllers\ReactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("{path?}", [ReactController::class, "render"])->where("path", ".*");