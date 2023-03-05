<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::post('/tambah-admin', [AdminController::class, 'store'])->name('admin.store');
Route::get('/edit-admin/{id}', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/update-admin', [AdminController::class, 'update'])->name('admin.update');
Route::get('/delete-admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::post('/tambah-produk', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/edit-produk/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
Route::put('/update-produk', [ProdukController::class, 'update'])->name('produk.update');
Route::get('/delete-produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');
Route::get('/buy-produk/{name_produk}', [ProdukController::class, 'buy'])->name('produk.buy');
