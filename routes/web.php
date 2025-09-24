<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;

Route::get('/', function () {

    // get all the posts that has the userid of the current logged in user
    // check if there is logged in user then get the post else dont
    $posts = auth()->check() ? auth()->user()->userPosts()->latest()->get() : [];

    // send it to this view
    return view('home', ['posts' => $posts]);
});

//                        call thje controller and the classs
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

Route::post('/create-post', [PostController::class, 'createPost']); // insert
Route::get('/edit-post/{post}', [PostController::class, 'showEditScreen']); // fetch

Route::put('/edit-post/{post}', [PostController::class, 'updatePost']); // update
Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']); // delete