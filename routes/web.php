<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MataKuliahController;
use App\Models\Mahasiswa;
use App\Models\Kelas;
use App\Models\MataKuliah;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman Depan (Landing Page)
Route::get('/', function () {
    return view('welcome');
});

// Halaman Dashboard (dengan penghitung data Real-time)
Route::get('/dashboard', function () {
    return view('dashboard', [
        'total_mahasiswa'  => Mahasiswa::count(),
        'total_kelas'      => Kelas::count(),
        'total_matakuliah' => MataKuliah::count(),
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

// Group Route yang butuh Login
Route::middleware('auth')->group(function () {
    
    // Fitur Profile Bawaan Laravel
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Fitur Utama Aplikasi (CRUD)
    Route::resource('mahasiswa', MahasiswaController::class);
    
    // Perbaikan: Memaksa parameter route menjadi {kelas} agar sesuai dengan Controller
    Route::resource('kelas', KelasController::class)->parameters(['kelas' => 'kelas']);

    Route::resource('matakuliah', MataKuliahController::class);
});

require __DIR__.'/auth.php';