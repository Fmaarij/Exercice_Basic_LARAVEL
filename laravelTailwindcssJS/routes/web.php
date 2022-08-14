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

Route::get('/', function () {
    $name=(env('APP_WELCOME'));
    return view('welcome',compact('name'));
});


// Route::get('/welcome', function () {

Route::get('/about', function () {
    $name=(env('APP_ABOUT'));
    return view('pages.about',compact('name'));
});

Route::get('/contact', function () {
    $name=(env('APP_CONTACT'));
    return view('pages.contact',compact('name'));
});
Route::get('/service', function () {
    $name=(env('APP_SERVICES'));
    return view('pages.service',compact('name'));
});

Route::get('/home', function () {
    $name=(env('APP_HOME'));
    return view('welcome',compact('name'));
});
