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
    return view('Acceuil');
});

Route::get('/Acceuil', function () {
    return view('Acceuil');
});

Route::get('/Propos', function () {
    return view('propos');
});

Route::get('/Contact', function () {
    return view('contact');
});
