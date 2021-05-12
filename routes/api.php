<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

Route::get('/posts/{id?}', [PostsController::class,'getPosts']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

