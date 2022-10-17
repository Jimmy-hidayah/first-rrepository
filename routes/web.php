<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Auth;
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

Route::middleware('auth', 'admin')->group(function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('admin/kategori', KategoriController::class);
    Route::resource('admin/produk', ProdukController::class);
    Route::resource('admin/transaksi', TransaksiController::class);
    Route::get('admin/laporan/product', [ProdukController::class, 'laporan'])->name('laporan-product');
    Route::get('cetakproduk', [ProdukController::class, 'laporan_cetak'])->name('cetakproduk');
    Route::get('admin/laporan/transaction', [TransaksiController::class, 'laporan'])->name('laporan-transaction');
    Route::get('cetaktransaksi', [TransaksiController::class, 'laporan_cetak'])->name('cetaktransaksi');
});
Route::middleware('auth', )->group(function() {
   Route::get('user', function() {
        return view('p');
   })->name('user');
});
