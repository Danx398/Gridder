<?php

use App\Http\Controllers\AuthControllers;
use App\Http\Controllers\Registros;
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

Route::get('/',[AuthControllers::class,'index'])->name('login');
Route::post('/logear',[AuthControllers::class,'logear'])->name('logear');
Route::get('/logout',[AuthControllers::class,'logout'])->name('logout');

Route::get('/registrar',[Registros::class,'index'])->name('registrar');
