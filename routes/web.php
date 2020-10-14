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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/arsitektur', [App\Http\Controllers\ArsitekturController::class, 'index'])->name('arsitektur');
Route::get('/infrastruktur', [App\Http\Controllers\InfrastrukturController::class, 'index'])->name('infrastruktur');
Route::get('/komersil', [App\Http\Controllers\KomersilController::class, 'index'])->name('komersil');
Route::get('/komplek', [App\Http\Controllers\KomplekController::class, 'index'])->name('komplek');
Route::get('/real_estate', [App\Http\Controllers\RealEstateController::class, 'index'])->name('real_estate');
Route::get('/rumah', [App\Http\Controllers\RumahController::class, 'index'])->name('rumah');