<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HasilAkhirController;
use App\Http\Controllers\Admin\HitungController;
use App\Http\Controllers\Admin\KriteriaController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

Route::prefix('/admin')->group(function() {
    Route::middleware('auth')->group(function() {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

        Route::resource('/kriteria', KriteriaController::class);
        Route::resource('/produk', ProdukController::class);
        Route::get('/hitung', [HitungController::class, 'index'])->name('hitung.hitung');
        Route::resource('/hasil-akhir', HasilAkhirController::class);
        // Route::get('hitung', [HitungController::class, 'hitung'])->name('hitung.hitung');
        
    });
});
