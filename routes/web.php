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

Route::prefix('computadores')->group(function () {
    Route::get('/', [App\Http\Controllers\Computadores\ComputadoresController::class, 'index'])->name('computadores.index');
});
Route::prefix('camaras')->group(function () {
    Route::get('/', [App\Http\Controllers\Camaras\CamarasController::class, 'index'])->name('camaras.index');
});
Route::prefix('accesorios')->group(function () {
    Route::get('/', [App\Http\Controllers\Accesorios\AccesoriosController::class, 'index'])->name('accesorios.index');
});
Route::prefix('redes')->group(function () {
    Route::get('/', [App\Http\Controllers\Redes\RedesController::class, 'index'])->name('redes.index');
});
Route::prefix('impresoras')->group(function () {
    Route::get('/', [App\Http\Controllers\Impresoras\ImpresorasController::class, 'index'])->name('impresoras.index');
});
