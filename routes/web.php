<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnggotaTimController;
use App\Http\Controllers\AktivitasController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\VideoArsipController;

// Halaman Login (bisa dibuka tanpa login)
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Halaman awal Laravel
Route::get('/', function () {
    return redirect('/login');
});

// Halaman yang wajib login
Route::middleware('auth')->group(function () {

// Dashboard
Route::get('/dashboard', function () {
return view('dashboard.index');
});

// Data Anggota
Route::get('/anggota', [AnggotaTimController::class, 'index']);
Route::get('/anggota/tambah', [AnggotaTimController::class, 'create']);
Route::post('/anggota', [AnggotaTimController::class, 'store']);
Route::get('/anggota/{id}/edit', [AnggotaTimController::class, 'edit']);
Route::put('/anggota/{id}', [AnggotaTimController::class, 'update']);
Route::delete('/anggota/{id}', [AnggotaTimController::class, 'destroy']);

// Manajemen Konten
Route::get('/konten', [KontenController::class, 'index']);
Route::get('/konten/tambah', [KontenController::class, 'create']);
Route::post('/konten', [KontenController::class, 'store']);
Route::put('/konten/{id}', [KontenController::class, 'update']);
Route::delete('/konten/{id}', [KontenController::class, 'destroy']);
Route::post('/konten/{id}/status', [KontenController::class, 'updateStatus']);

// Aktivitas Harian
Route::get('/aktivitas', [AktivitasController::class, 'index']);
Route::get('/aktivitas/tambah', [AktivitasController::class, 'create']);

Route::get('/aktivitas/anggota/{id}', [AktivitasController::class, 'show']);
Route::get('/aktivitas/anggota/{id}/tambah', [AktivitasController::class, 'createActivity']);
Route::post('/aktivitas/anggota/{id}/simpan', [AktivitasController::class, 'storeActivity']);

Route::get('/aktivitas/anggota/{anggotaId}/edit/{aktivitasId}', [AktivitasController::class, 'edit']);
Route::post('/aktivitas/anggota/{anggotaId}/edit/{aktivitasId}', [AktivitasController::class, 'updateActivity']);
Route::post('/aktivitas/anggota/{anggotaId}/hapus/{aktivitasId}', [AktivitasController::class, 'deleteActivity']);
Route::post('/aktivitas/anggota/{anggotaId}/validasi/{aktivitasId}', [AktivitasController::class, 'validasi']);

// Arsip Video
Route::get('/video', [VideoArsipController::class, 'index']);
Route::post('/video', [VideoArsipController::class, 'store']);
Route::put('/video/{id}', [VideoArsipController::class, 'update']);
Route::delete('/video/{id}', [VideoArsipController::class, 'destroy']);

// Logout
Route::post('/logout', [AuthController::class, 'logout']);

});
