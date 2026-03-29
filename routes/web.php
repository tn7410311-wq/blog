<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/admin/users',[AdminController::class,'index']);
Route::get('/admin/ban/{id}',[AdminController::class,'ban']);
Route::get('/admin/unban/{id}',[AdminController::class,'unban']);
Route::delete('/admin/delete/{id}',[AdminController::class,'destroy']);

Route::get('/login',[AuthController::class,'showLogin']);
Route::post('/login',[AuthController::class,'login']);
Route::get('/register',[AuthController::class,'showRegister']);
Route::post('/register',[AuthController::class,'register']);
Route::post('/logout',[AuthController::class,'logout']);

Route::middleware('auth')->group(function(){
    Route::get('/posts',[PostController::class,'index']);
    Route::get('/posts/create',[PostController::class,'create']);
    Route::post('/posts',[PostController::class,'store']);
    Route::get('/posts/{id}/edit',[PostController::class,'edit']);
    Route::put('/posts/{id}',[PostController::class,'update']);
    Route::delete('/posts/{id}',[PostController::class,'destroy']);
    });
=======
Route::get('/login', [AuthController::class,'showLogin']);
Route::post('/login', [AuthController::class,'login']);
Route::get('/register', [AuthController::class,'showRegister']);
Route::post('/register', [AuthController::class,'register']);
Route::post('/logout', [AuthController::class,'logout']);


Route::get('/posts', [PostController::class,'index']);
Route::get('/posts/create', [PostController::class,'create']);
Route::get('/posts/{id}/edit', [PostController::class,'edit']);
Route::post('/posts', [PostController::class,'store']);
Route::put('/posts/{id}', [PostController::class,'update']);
Route::delete('/posts/{id}', [PostController::class,'destroy']);
Route::get('/posts/{id}', [PostController::class,'show']);

Route::get('/admin/ban/{id}', [AdminController::class,'ban']);
Route::get('/admin/unban/{id}', [AdminController::class,'unban']);
Route::delete('/admin/delete/{id}', [AdminController::class,'destroy']);
Route::get('/admin/users', [AdminController::class,'index']);
>>>>>>> bd7d43d (commit)
