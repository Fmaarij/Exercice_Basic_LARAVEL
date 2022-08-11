<?php

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



Route::get('/', function(){
    return view('layouts.index');
});
Route::get('/home', function(){
    return view('home');
});

Route::get('/date', function () {
    $dateDuJours ='Date & time in PHP '.  date('d-m-y h:i:s');
    return view('date', compact('dateDuJours'));
});

Route::get('/fruit', function(){
    $tabFruit = ['Appel', 'Oranges','Kiwi', 'Banana'];

    return view('fruit', compact('tabFruit'));
});
