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

use App\Http\Controllers\BmiController;
Route::get('/bmi', [BmiController::class, 'index'])->name('bmi');

use App\Http\Controllers\KonversiController;

Route::get('/currency', [KonversiController::class, 'index'])->name('currency');

use App\Http\Controllers\mentalController;

Route::get('/mental', [mentalController::class, 'index'])->name('mental');
