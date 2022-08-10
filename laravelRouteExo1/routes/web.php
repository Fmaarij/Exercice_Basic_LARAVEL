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

// PARTIE 1 ****
// Route::get('/', function () {
//     return "Bonjour Chers utilisateurs";
// });

// Route::get('/', function () {
//     $bienvenue = "Bienvenue sur mon site";
//     return $bienvenue;
// });

 
// Route::get('/', function () {
//     $bienvenue = "Bienvenue sur mon site";
//     return view('welcome ',compact('bienvenue'));
// });







//PARTIE 2 ****

// Route::get('/', function () {
//     return view('partials.navbar');
// });

// Route::get('/welcome', function () {
//     return view('welcome'); 
// });

// Route::get('/about', function () {
//     return view('about');

// });


//PARTIE 3 ****

// Route::get('/about', function () {
//     $nom = 'Jenny';
//     $prenom = 'Alice';  
//     return view('about',compact('nom', 'prenom'));
//  });
//  Route::get('/welcome', function () {
//     $nom = 'Jenny';
//     $prenom = 'Alice';  
//     return view('welcome', compact('nom', 'prenom'));
//  });

//Navigation
Route::get('/', function () {
    return view('layout.app');
});


Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});
