<?php

use Illuminate\Support\Facades\DB;
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
})->name('acceuil');

Route::get('/Propos', function () {
    return view('propos');
})->name('propos');

Route::get('/Contact', function () {
    return view('contact');
})->name('contact');

Route::get('/inscription', function () {
    return view('inscription');
})->name('inscription');

Route::post('/inscription', function () {

    DB::insert(' INSERT INTO form(name, prenom, age, sexe) VALUES (:nom, :prenom, :age, :sexe)', [
        'nom' => request('nom'),
        'prenom' => request('prenom'),
        'age' => request('age'),
        'sexe' => request('sex')
    ]);

    return ('Les informations ont été bien reçu avec succès...');
});
