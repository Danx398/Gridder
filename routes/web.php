<?php

use App\Http\Controllers\AuthControllers;
use App\Http\Controllers\Inicios;
use App\Http\Controllers\Libros;
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

/* Rutas para los libros */
Route::get('/anaFrank',[Libros::class,'anaFrank'])->name('anaFrank');
Route::get('/cienAnios',[Libros::class,'cienAnios'])->name('cienAnios');
Route::get('/teamo',[Libros::class,'teAmo'])->name('teamo');
Route::get('/emma',[Libros::class,'emma'])->name('emma');
Route::get('/charlotte',[Libros::class,'charlotte'])->name('charlotte');
Route::get('/fierecilla',[Libros::class,'fierecilla'])->name('fierecilla');
Route::get('/animals',[Libros::class,'animals'])->name('animals');
Route::get('/manual',[Libros::class,'manual'])->name('manual');