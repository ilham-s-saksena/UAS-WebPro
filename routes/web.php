<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataBarangController;

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

Route::get('/dataBarang', [DataBarangController::class, 'index'])->name('dataBarang');
Route::post('/dataBarang/add', [DataBarangController::class, 'create'])->name('tambahBarang');
Route::post('/dataBarang/update/{id}', [DataBarangController::class, 'update'])->name('updateBarang');
Route::get('/dataBarang/delete/{id}', [DataBarangController::class, 'delete'])->name('deleteBarang');
