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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/rubrica', [App\Http\Controllers\RubricasController::class, 'index'])->name('rubrica.index');
Route::get('/rubrica/create', [App\Http\Controllers\RubricasController::class, 'create'])->name('rubrica.create');
Route::get('/rubrica/{rubrica}/edit', [App\Http\Controllers\RubricasController::class, 'edit'])->name('rubrica.profile.edit');
Route::post('/rubrica/profile/store', [App\Http\Controllers\RubricasController::class, 'store'])->name('rubrica.profile.store');
Route::put('/rubrica/{rubrica}/update', [App\Http\Controllers\RubricasController::class, 'update'])->name('rubrica.profile.update');

Route::get('/rubrica/{rubrica}/destroy',[App\Http\Controllers\RubricasController::class, 'destroy'])->name('rubrica.profile.delete');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
