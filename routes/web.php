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
    return view('auth.login');
});

Auth::routes();
Route::resource('area', App\Http\Controllers\AreaController::class);
Route::resource('equipo', App\Http\Controllers\EquipoController::class);
Route::resource('medio', App\Http\Controllers\MedioController::class);
Route::resource('sede', App\Http\Controllers\SedeController::class);
Route::resource('serial', App\Http\Controllers\SerialController::class);
Route::resource('tecnico', App\Http\Controllers\TecnicoController::class);
Route::resource('ticke', App\Http\Controllers\TickeController::class);
Route::resource('tipo-equipo', App\Http\Controllers\TipoEquipoController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
