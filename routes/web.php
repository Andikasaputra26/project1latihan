<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PosController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProductController;

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

Route::controller(AuthController::class)->group(function () {
    // Route::get('register','register')->name('register');
    // Route::post('register','registerSimpan')->name('register.simpan');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAksi')->name('login.aksi');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

// Route::get('dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route::controller(PosController::class)->prefix('pos')->group(function () {
    //     Route::get('', 'index')->name('pos');
    //     Route::get('tambah', 'tambah')->name('pos.tambah');
    //     Route::post('tambah', 'simpan')->name('pos.tambah.simpan');
    //     Route::get('edit/{id}', 'edit')->name('pos.edit');
    //     Route::post('edit/{id}', 'update')->name('pos.tambah.update');
    //     Route::get('hapus/{id}', 'hapus')->name('pos.hapus');
    // });

    Route::resource('pos', ProductController::class);

    Route::controller(KategoriController::class)->prefix('kategori')->group(function () {
        Route::get('', 'index')->name('kategori');
        Route::get('tambah', 'tambah')->name('kategori.tambah');
        Route::post('tambah', 'simpan')->name('kategori.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('kategori.edit');
        Route::post('edit/{id}', 'update')->name('kategori.tambah.update');
        Route::get('hapus/{id}', 'hapus')->name('kategori.hapus');
    });

    // Route::controller(UserController::class)->prefix('user')->group(function () {
    //     Route::get('', 'index')->name('user');
    // });

    Route::resource('user', UserController::class);
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
