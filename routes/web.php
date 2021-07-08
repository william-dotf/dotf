<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;




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

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get("/",[ProductController::class,'index']);
Route::get('/products', [ProductController::class,'index']);
Route::get('/product/create', [ProductController::class,'create']);
Route::put('/product/{product}', [ProductController::class,'update']);
Route::get('/product/{product}',[ProductController::class,'show']);
Route::post('/product/store', [ProductController::class,'store']);
Route::get('/product/{product}/edit', [ProductController::class,'edit']);

Route::get('/services', [ServiceController::class,'index']);
Route::get('/service/create', [ServiceController::class,'create']);
Route::put('/service/{service}', [ServiceController::class,'update']);
Route::get('/service/{service}',[ServiceController::class,'show']);
Route::post('/service/store', [ServiceController::class,'store']);
Route::get('/service/{service}/edit', [ServiceController::class,'edit']);

Route::get('/users', [UserController::class,'index']);
Route::get('/register', [registerController::class,'create']);
Route::put('/user/{user}', [UserController::class,'update']);
Route::get('/user/{user}',[UserController::class,'show']);
Route::post('/user/store', [UserController::class,'store']);
Route::get('/user/{user}/edit', [UserController::class,'edit']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
