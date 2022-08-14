<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;


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
    $nom="Nom de l'entreprise : " .(env('APP_ENTREPRISE'));
    $slogan="Mon slogan : " .(env('APP_SLOGAN'));
    return view('layouts.index',compact('nom','slogan'));
});



Route::get('/contact', function () {
    $nom="Nom de l'entreprise : " .(env('APP_ENTREPRISE'));
    $slogan="Mon slogan : " .(env('APP_SLOGAN'));
    return view('page.contact',compact('nom','slogan'));

});

Route::get('/home', function (){
    $nom="Nom de l'entreprise : " .(env('APP_ENTREPRISE'));
    $slogan="Mon slogan : " .(env('APP_SLOGAN'));
    return view('page/home',compact('nom','slogan'));
});


Route::get("user/{name}",[Users::class, 'index']);

Route::get('/user', function (){
    return view('user',['name'=>'welcome to users page']);
});
