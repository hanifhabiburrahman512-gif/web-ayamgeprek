<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\PelangganController;

// ************************
// UJI ROUTE PALING SEDERHANA (Tinggalkan ini di sini untuk memastikan 404 teratasi)
// ************************
Route::get('/test-route', function () {
    return "Route Sederhana Berhasil Ditemukan!";
});
// ************************


// Route Halaman Utama (Home)
Route::get('/', [PelangganController::class, 'index'])->name('home');

// Route Dashboard (Memerlukan Login)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route Profil Pengguna (Bisa diakses user biasa dan admin)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// =========================================================
// AREA ROUTE ADMIN (Hanya untuk User yang Login DAN Admin)
// =========================================================
Route::middleware(['auth', 'can:is-admin'])
     ->prefix('admin')
     ->name('admin.')
     ->group(function () {
        
        // CRUD Menu
        Route::resource('menu', MenuController::class);
        
        // Route Dashboard Admin (Tambahkan jika diperlukan)
        // Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    });

require __DIR__.'/auth.php';