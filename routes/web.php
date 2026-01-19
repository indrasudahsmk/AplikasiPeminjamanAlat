<?php

use App\Models\Pengembalian;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');
Route::get('/preview', function () {
    return view('preview');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::middleware('isAdmin')->group(function () {
        Route::get('/dashboard/admin', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        Route::resource('/users', UserController::class);
        Route::resource('/kategori', KategoriController::class);
        Route::resource('/alat', AlatController::class);
        Route::resource('/peminjaman', PeminjamanController::class);
        Route::resource('/pengembalian', PengembalianController::class);
    });

    Route::middleware('isPetugas')->group(function () {
        Route::get('/dashboard/petugas', function () {
            return view('petugas.dashboard');
        })->name('petugas.dashboard');
    });
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
