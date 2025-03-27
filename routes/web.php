<?php

use App\Http\Controllers\InfoController;
use App\Http\Controllers\LenguageController;
use Illuminate\Support\Facades\Route;

// Esta ruta se encarga de cambiar el idioma de la sesion a traves de una variable en la URL
// Por ejemplo, si se accede a /lang/es, se cambiara el idioma a espanol
Route::get('/lang/{lang}', [LenguageController::class, 'switchLenguage'])->name('lang');

Route::get('/', function () {
    return view('welcome');
});

// Esta ruta muestra informacion en diferentes idiomas
// segun el idioma establecido en la sesion
Route::get('/info', [InfoController::class, 'index'])->name('info');
