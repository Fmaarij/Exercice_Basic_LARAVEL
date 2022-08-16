<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamAController;
use App\Http\Controllers\TeamBController;
use Illuminate\Support\Facades\Route;

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



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/teamA', [TeamAController::class, 'index'])->name('teamA');
Route::get('/teamB', [TeamBController::class,'index'])->name('teamB');
