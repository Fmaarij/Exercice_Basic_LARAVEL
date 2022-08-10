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
    return view('pages.nav');
});

Route::get('/about', function () {
    $var1 = "Kiwi";
    return view('pages.about', compact('var1'));
});

Route::get('/contact', function () {

    $v1 = "Jhon";
    $v2 = "Jumper";
    $v3 = "0473516547";

    return view('pages.contact', compact('v1', 'v2', 'v3'));
 });
