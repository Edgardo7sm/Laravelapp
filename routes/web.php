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
    return redirect('/peliculas');
});
Route::post('/upload', 'ImageController@upload');
Route::resource('peliculas','App\Http\Controllers\PeliculaController');
Route::resource('turnos','App\Http\Controllers\TurnoController');
