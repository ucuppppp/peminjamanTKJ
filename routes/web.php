<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini Anda dapat mendaftarkan rute web untuk aplikasi Anda. Rute-rute ini
| dimuat oleh RouteServiceProvider dalam sebuah grup yang berisi grup middleware "web".
| Sekarang buatlah sesuatu yang hebat!
|
*/

// Rute untuk halaman utama
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'), // Menentukan apakah rute login tersedia
        'canRegister' => Route::has('register'), // Menentukan apakah rute register tersedia
        'laravelVersion' => Application::VERSION, // Versi Laravel yang digunakan
        'phpVersion' => PHP_VERSION, // Versi PHP yang digunakan
    ]);
});

// Rute untuk menampilkan daftar pengguna
Route::get('/users', [UserController::class, 'index'])->name('users.index');

// Rute untuk halaman dashboard, hanya dapat diakses oleh pengguna yang sudah terotentikasi
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rute untuk halaman testing
Route::get('/testing', function () {
    return Inertia::render('Posts/Testing');
});

Route::get('/items', function () {
    return Inertia::render('Items');
});

/*
|--------------------------------------------------------------------------
| Grup Middleware Auth
|--------------------------------------------------------------------------
|
| Di sini terdapat rute-rute yang hanya dapat diakses oleh pengguna yang sudah
| terotentikasi (login). Rute-rute ini memerlukan pengguna untuk sudah login
| sebelum mengaksesnya.
|
*/

// Grup rute yang hanya dapat diakses oleh pengguna yang sudah terotentikasi
Route::middleware('auth')->group(function () {
    // Rute untuk mengedit profil pengguna
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Rute untuk mengupdate profil pengguna
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Rute untuk menghapus profil pengguna
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Memasukkan file routes 'auth.php' yang berisi rute-rute untuk otentikasi pengguna
require __DIR__ . '/auth.php';

