<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AxeController;

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/profile',[UserController::class, 'show']);
Route::get('/',[PostController::class, 'index']);
Route::get('/profile',[AxeController::class,'show']);