<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;


Route::get('home', [HomeController::class, 'index']);
Route::resource('users', UserController::class);
