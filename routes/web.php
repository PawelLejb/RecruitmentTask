<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoriesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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
