<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryImageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/dashboard',[DashboardController::class,'index']);
Route::get('/',[IndexController::class,'index'] );
Route::post('/image',[IndexController::class,'showImage']);
Route::Resource('category',CategoryController::class);
Route::Resource('categoryImage',CategoryImageController::class);
