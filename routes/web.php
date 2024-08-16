<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\AdminSertifikasiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/auth/login', [AuthController::class, 'index'])->name('auth.index');
Route::post('/auth/login', [AuthController::class, 'authent'])->name('auth.login');
Route::get('/auth/logout', [AuthController::class, 'index'])->name('auth.logout');

Route::middleware(['auth'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/admin/sertifikasi', [AdminSertifikasiController::class, 'index'])->name('admin.sertifikasi.index');
    Route::get('/admin/sertifikasi/create', [AdminSertifikasiController::class, 'create'])->name('admin.sertifikasi.create');
    Route::post('/admin/sertifikasi', [AdminSertifikasiController::class, 'store'])->name('admin.sertifikasi.store');
    Route::get('/admin/sertifikasi/delete/{id}', [AdminSertifikasiController::class, 'delete'])->name('admin.sertifikasi.delete');
    Route::get('/admin/sertifikasi/edit/{id}', [AdminSertifikasiController::class, 'edit'])->name('admin.sertifikasi.edit');
    Route::put('/admin/sertifikasi/update/{id}', [AdminSertifikasiController::class, 'update'])->name('admin.sertifikasi.update');

    
    Route::get('/admin/project', [AdminProjectController::class, 'index'])->name('admin.project.index');
    Route::get('/admin/project/create', [AdminProjectController::class, 'create'])->name('admin.project.create');
    Route::post('/admin/project', [AdminProjectController::class, 'store'])->name('admin.project.store');
    Route::get('/admin/project/delete/{id}', [AdminProjectController::class, 'delete'])->name('admin.project.delete');
    Route::get('/admin/project/edit/{id}', [AdminProjectController::class, 'edit'])->name('admin.project.edit');
    Route::put('/admin/project/update/{id}', [AdminProjectController::class, 'update'])->name('admin.project.update');
});