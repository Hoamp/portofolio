<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminSertifikasiController;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/auth/login', [AuthController::class, 'index'])->name('auth.index');
Route::post('/auth/login', [AuthController::class, 'authent'])->name('auth.login');
Route::get('/auth/logout', [AuthController::class, 'index'])->name('auth.logout');

Route::middleware(['auth'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/admin/sertifikasi', [AdminSertifikasiController::class, 'index'])->name('admin.sertifikasi.index');
    Route::get('/admin/sertifikasi/create', [AdminSertifikasiController::class, 'create'])->name('admin.sertifikasi.create');
    Route::post('/admin/sertifikasi', [AdminSertifikasiController::class, 'store'])->name('admin.sertifikasi.store');
});