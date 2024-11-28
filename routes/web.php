<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TransOrderController;
use Illuminate\Support\Facades\Route;


use function Pest\Laravel\delete;

//  "/" adalah default(bawaan) route
//  method get(melihat), post(mengirim data dari form(insert,update)), put(mengirim data dari form (khusu update)),delete(mengirim data dari form untuk delete)

// untuk resource Login
Route::get('/', [LoginController::class, 'index']);
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// grouping setelah routing
Route::middleware(['auth'])->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('trans_order', TransOrderController::class);
});

Route::get('latihan', [LatihanController::class, 'index']);
Route::get('edit/{id}', [LatihanController::class, 'edit']);
Route::get('hapus/{id}', [LatihanController::class, 'delete']);

Route::get('kalkulator', [KalkulatorController::class, 'index']);
Route::get('tambah', [KalkulatorController::class, 'tambah'])->name('tambah');
Route::get('kurang', [KalkulatorController::class, 'kurang'])->name('kurang');
Route::get('kali', [KalkulatorController::class, 'kali'])->name('kali');
Route::get('bagi', [KalkulatorController::class, 'bagi'])->name('bagi');

Route::post('store-tambah1', [KalkulatorController::class, 'storeTambah'])->name('store-tambah');
Route::post('store-kurang', [KalkulatorController::class, 'storeKurang'])->name('store-kurang');
Route::post('store-kali', [KalkulatorController::class, 'storeKali'])->name('store-kali');
Route::post('store-bagi', [KalkulatorController::class, 'storeBagi'])->name('store-bagi');

// resource berfungdi sgsr tidak usah membuat beberapa method dalam 1 baris
Route::resource('user', UsersController::class);

Route::get('delete/{id}', [UsersController::class, 'delete'])->name('delete');

// route paket
