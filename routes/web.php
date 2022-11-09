<?php

use App\Http\Controllers\AuthControllers;
use App\Http\Controllers\Inicios;
use App\Http\Controllers\Registros;
use Illuminate\Support\Facades\Route;

/* Rutas para el inicio de Sesion */
Route::get('/',[AuthControllers::class,'index'])->name('login');
Route::post('/logear',[AuthControllers::class,'logear'])->name('logear');
Route::get('/logout',[AuthControllers::class,'logout'])->name('logout');

/* Rutas para registrar y mostrar la vista */
Route::get('/registro',[Registros::class,'index'])->name('registro');
Route::post('/registrar',[Registros::class,'registrar'])->name('registrar');

/* Rutas para el inicio */

Route::get('/inicio',[Inicios::class,'index'])->name('inicio');