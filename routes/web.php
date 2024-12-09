<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ViolationController;
use App\Http\Controllers\PelanggaranController;

// Rute untuk halaman utama (opsional, jika diperlukan)
Route::get('/', function () {
    return view('home');
})->name('home');

// Rute untuk halaman informasi mahasiswa
Route::get('/parent/informationPage', [StudentController::class, 'showProfile'])->name('parent.informationPage');

Route::get('/parent/pelanggaranPage', [ViolationController::class, 'index']);

Route::get('/pelanggaran', [PelanggaranController::class, 'index'])->name('pelanggaran.index');
Route::get('/pelanggaran/create', [PelanggaranController::class, 'create'])->name('pelanggaran.create');
Route::post('/pelanggaran/store', [PelanggaranController::class, 'store'])->name('pelanggaran.store');
Route::get('/pelanggaran/get-pelanggaran', [PelanggaranController::class, 'getPelanggaran'])->name('pelanggaran.get-pelanggaran');

// Main login page
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Handle login
Route::post('/login', [AuthController::class, 'login'])->name('process.login');
// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Role-specific login pages
Route::get('/login/orangTua', [AuthController::class, 'showOrangTuaLoginForm'])->name('login.Ortu');
Route::get('/login/keasramaan', [AuthController::class, 'showKeasramaanLoginForm'])->name('login.keasramaan');
Route::get('/login/kemahasiswaan', [AuthController::class, 'showKemahasiswaanLoginForm'])->name('login.kemahasiswaan');
Route::get('/login/dosen', [AuthController::class, 'showDosenLoginForm'])->name('login.dosen');

Route::post('/login-ortu', [AuthController::class, 'processOrangTuaLogin'])->name('process.login');

Route::get('/student/{id}', [UserController::class, 'showStudentProfile'])->name('info.mahasiswa');

Route::post('/login-ortu', [AuthController::class, 'processOrangTuaLogin'])->name('process.login.ortu');
