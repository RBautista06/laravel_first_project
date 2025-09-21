<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//                        call thje controller and the class
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);