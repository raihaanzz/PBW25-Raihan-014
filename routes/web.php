<?php

use App\Models\Berita;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


// 1. Rute Publik (Bisa diakses siapa saja)
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
// Rute untuk Tamu (Belum Login)
Route::middleware('guest')->group(function () {
    // Halaman Tampilan (GET)
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');

    // Proses Logika (POST)
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
});

// 3. Rute Terproteksi (Hanya untuk yang SUDAH login)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard', ["title" => "Dashboard"]);
    });
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name" => "Raihan Az Dzaky",
        "nohp" => "081225018904",
        "img" => "img/raihan.jpg"
    ]);
});
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class, 'tampildata']);
Route::get('/contact', function () {
    return view('kontak', [
        "title" => "Kontak",
    ]);
});
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambahmahasiswa'])->name('tambahmahasiswa');
Route::get('/tampildata/{id}', [MahasiswaController::class, 'tampildata'])->name('tampildata');
Route::post('/insertdata', [MahasiswaController::class, 'insertdata'])->name('insertdata');
Route::post('/editdata/{id}', [MahasiswaController::class, 'editdata'])->name('editdata');
Route::get('/delete/{id}', [MahasiswaController::class, 'delete'])->name('delete');

