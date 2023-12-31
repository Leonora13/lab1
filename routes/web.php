<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController; 
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

Route::get('/', [HomeController::class, 'index'] );
Route::get('/about', [HomeController::class, 'about'] );
Route::get('/contact', [HomeController::class, 'contact'] );
Route::get('/products',[ProductController::class, 'index']);
Route::get('/create_products',[ProductController::class, 'create']);
Route::get('/store',[ProductController::class, 'store']);