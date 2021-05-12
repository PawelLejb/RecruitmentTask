<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoriesController;


Route::get('/', function () {
    return view('welcome');
});

Route::post('posts/{post}',[PostsController::class,"edit"]);
Route::delete('posts/{post}',[PostsController::class,"destroy"]);

Route::put('posts/{post}',[PostsController::class,"update"]);
Route::get('posts',[PostsController::class,"index"]);

Route::get('posts/create',[PostsController::class,"create"]);
Route::get('posts/store',[PostsController::class,"store"]);

Route::get('categories/create',[CategoriesController::class,"create"]);
Route::post('categories/store',[CategoriesController::class,"store"]);
