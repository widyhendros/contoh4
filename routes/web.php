<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TransaksiController;

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

Route::get('/barang', [BarangController::class, 'index']);
Route::get('/barang/tambah', [BarangController::class, 'tambah']);
Route::post('/barang/tambah', [BarangController::class, 'store']);
Route::get('/barang/{id}/edit', [BarangController::class, 'edit']);
Route::put('/barang/{id}', [BarangController::class, 'update']);
Route::delete('/barang/{id}', [BarangController::class, 'delete']);

Route::get('/transaksi', [TransaksiController::class, 'transaksi']);
Route::get('/transaksi/tambahtransaksi', [TransaksiController::class, 'tambahtransaksi']);
Route::post('/transaksi/tambahtransaksi', [TransaksiController::class, 'storetransaksi']);
Route::get('/transaksi/detailtransaksi/{id}', [TransaksiController::class, 'detail']);