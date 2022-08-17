<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
// use App\Http\Controllers\ContactController;
use App\Http\Controllers\DisplayController;

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

Route::get('/',[HomeController::class,'home'])->name('house');
Route::get('/about',[AboutController::class,'about'])->name('aprops');
Route::get('/contact',[ContactController::class,'contact'])->name('kontak');
Route::get('/members',[DisplayController::class,'display'])->name('user');

Route::get('/create',[ContactController::class,'store']);
Route::post('/create',[ContactController::class,'store']);

Route::get('/dislpay',[DisplayController::class,'display']);
