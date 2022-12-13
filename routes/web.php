<?php

use App\Http\Controllers\Contorller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as RoutingController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ProdukController;




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
    return view('homepage.index');
});


// Route group admin
Route::group(['prefix' => '/admin'], function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.admin');

    //Route::group parent homepage
    Route::group(['prefix' => '/homepage'], function() {
        Route::get('/', [HomepageController::class, 'index'])->name('homepage.index');
        Route::get('/about', [HomepageController::class, 'about'])->name('about.homepage');
        Route::get('/kategori', [HomepageController::class, 'kategori'])->name('kategori.homepage');
        Route::get('/kontak', [HompageController::class, 'kontak'])->name('kontak.homepage');
    });

    //Route::group parent kategori
    Route::group(['prefix' => '/kategori'], function() {
        Route::get('/', [KategoriController::class, 'index'])->name('kategori.index');
        Route::get('/create', [KategoriController::class, 'create'])->name('create.kategori');
        Route::get('/edit', [KategoriController::class, 'edit'])->name('edit.kategori');
    });

    //Route::group parent produk
    Route::group(['prefix' => '/produk'], function (){
        Route::get('/', [ProdukController::class, 'index'])->name('produk.index');
        Route::get('/create', [ProdukController::class, 'create'])->name('create.produk');
        Route::get('/show', [ProdukController::class, 'show'])->name('show.produk');
        Route::get('/edit', [ProdukController::class, 'edit'])->name('edit.produk');

    });

    //Route::group parent transaksi
    Route::group(['prefix' => '/transaksi'], function (){
        Route::get('/', [TransaksiController::class, 'index'])->name('transaksi.index');
        Route::get('/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit');
        Route::get('/show', [TransaksiController::class, 'show'])->name('transaksi.show');

    });

    //Route::group parent customer
    Route::group(['prefix' => '/customer'], function (){
        Route::get('/', [CustomerController::class, 'index'])->name('customer.index');
        Route::get('/edit', [CustomerController::class, 'edit'])->name('customer.edit');

    });

    //Route::group parent profil
    Route::group(['prefix' => '/user'], function (){
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/setting', [UserController::class, 'setting'])->name('user.setting');

    });

    //Route::group parent laporan
    Route::group(['prefix' => '/laporan'], function (){
        Route::get('/', [LaporanController::class, 'index'])->name('laporan.index');
        Route::get('/proseslaporan', [LaporanController::class, 'proses'])->name('laporan.proses');

    });

});
