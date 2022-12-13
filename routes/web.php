<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KatgoriController;


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

// Route group admin
Route::group(['prefix' => '/admin'], function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.admin');

    //Route::group parent kategori
    Route::group(['prefix' => '/kategori'], function() {
        Route::get('/', [KatgoriController::class, 'index'])->name('kategori.index');
        Route::get('/create', [KatgoriController::class, 'create'])->name('create.kategori');
        Route::get('/edit', [KatgoriController::class, 'edit'])->name('edit.kategori');
    });
});
