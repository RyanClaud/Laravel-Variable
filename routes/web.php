<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/greet/{name}', [UserController::class, 'greet']);
Route::get('/greet', [UserController::class, 'greetWithAge']);
Route::get('/', [UserController::class, 'index']);