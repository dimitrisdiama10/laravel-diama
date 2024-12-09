<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class , 'home']);
Route::get('/about', [AppController::class , 'about']);
Route::get('/contact', [AppController::class , 'contact']);
Route::get('/users', [AppController::class ,'listOfUsers']);
Route::get('/user/{user_id}' , [AppController::class ,'showUser']);

Route::get('/posts', [PostController::class ,'index']);
Route::get('/posts/create', [PostController::class ,'createForm']);
Route::post('/posts/create', [PostController::class ,'store']);
Route::get('/posts/{id}', [PostController::class ,'show']);
Route::get('/posts/{id}/delete', [PostController::class ,'delete']);
Route::get('/posts/{id}/edit', [PostController::class ,'editForm']);
Route::put('/posts/{id}/update', [PostController::class ,'update']);

Route::get('/search-results', [SearchController::class ,'searchResult']);