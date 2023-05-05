<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/stringa', function () {
    return ('Ciao sono la pagina della stringa');
});

Route::get('/numero-intero', function () {
    return 39;
});

Route::get('/array', function () {
    return $arry=[12,3,14,20];
});

Route::get('/chi-siamo', function () {
    return view('chisiamo');
});

Route::get('/contatti', function () {
    return view('contatti');
});

Route::get('/storia', function () {
    return view('storia');
});