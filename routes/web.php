<?php

use App\Models\Berita;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
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
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
