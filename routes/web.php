<?php

use App\Models\Berita;

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
Route::get('/berita', function () {
    return view('berita', [
        "title" => "Berita",
        "beritas" => Berita::ambildata(),
    ]);
});
Route::get('/berita/{slug}', function ($slug) {


    // $new_berita = [];

    // foreach ($data_berita as $berita) {
    //     if ($berita["slug"] === $slugp) {
    //         $new_berita = $berita; // $berita isinya array = [ "judul", "slug", "penulis", "isi"]
    //     }
    // }



    return view('singleberita', [
        "title" => "Berita",
        "new_berita" => Berita::caridata($slug),
    ]);
});
Route::get('/contact', function () {
    return view('kontak', [
        "title" => "Kontak",
    ]);
});
