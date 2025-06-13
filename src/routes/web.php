<?php

use App\Models\JadwalPengobatan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\JadwalPengobatanController;

Route::get('/', [AuthController::class, 'index'])->name('home');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register-page', [AuthController::class, 'registerPage'])->name('register.page');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.home');
    // jadawl dokter
    Route::get('/admin/jadwal-dokter', [JadwalController::class, 'index'])->name('admin.jadwaldokter');
    Route::post('/admin/jadwal-dokter', [JadwalController::class, 'store'])->name('admin.jadwaldokter.store');
    Route::get('/admin/jadwal-dokter/show/{id}', [JadwalController::class, 'show'])->name('admin.jadwaldokter.show');
    Route::post('/admin/jadwal-dokter/edit/{id}', [JadwalController::class, 'edit'])->name('admin.jadwaldokter.edit');
    Route::get('/admin/jadwal-dokter/{id}', [JadwalController::class, 'destroy'])->name('admin.jadwaldokter.delete');
    // pasien
    Route::get('/admin/pasien', [PasienController::class, 'index'])->name('admin.pasien');
    Route::post('/admin/pasien', [PasienController::class, 'store'])->name('admin.pasien.store');
    Route::get('/admin/pasien/show/{id}', [PasienController::class, 'show'])->name('admin.pasien.show');
    Route::post('/admin/pasien/edit/{id}', [PasienController::class, 'edit'])->name('admin.pasien.edit');
    Route::get('/admin/pasien/{id}', [PasienController::class, 'destroy'])->name('admin.pasien.delete');
    // jadwal pengobatan
    Route::get('/admin/pengobatan', [JadwalPengobatanController::class, 'index'])->name('admin.pengobatan');
    Route::post('/admin/pengobatan', [JadwalPengobatanController::class, 'store'])->name('admin.pengobatan.store');
    Route::get('/admin/pengobatan/show/{id}', [JadwalPengobatanController::class, 'show'])->name('admin.pengobatan.show');
    Route::post('/admin/pengobatan/edit/{id}', [JadwalPengobatanController::class, 'edit'])->name('admin.pengobatan.edit');
    Route::get('/admin/pengobatan/{id}', [JadwalPengobatanController::class, 'destroy'])->name('admin.pengobatan.delete');
    Route::get('/admin/filter/pengobatan', [JadwalPengobatanController::class, 'filter'])->name('admin.pengobatan.filter');
    Route::get('/admin/cetakpdf', [JadwalPengobatanController::class, 'cetakpdf'])->name('admin.pengobatan.cetakpdf');

    // pasien
    Route::get('/user/home', [UserController::class, 'index'])->name('user.home');
     // jadawl dokter
     Route::get('/user/jadwal-dokter', [UserController::class, 'jadwaldokter'])->name('user.jadwaldokter');
      // jadwal pengobatan
    Route::get('/user/pengobatan', [UserController::class, 'pengobatan'])->name('user.pengobatan');
    Route::post('/user/pengobatan', [UserController::class, 'pengobatanstore'])->name('user.pengobatan.store');
});
Route::get('/logout', [AuthController::class, 'logout']);