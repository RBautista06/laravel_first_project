<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/', function () {

    // get all the posts that has the userid of the current logged in user

    // $posts= Post::where('user_id', auth()->id())->get();
    $posts = auth()->user()->userPosts()->latest()->get();

    // send it to this view
    return view('home', ['posts' => $posts]);
});

//                        call thje controller and the classs
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

Route::post('/create-post', [PostController::class, 'createPost']);