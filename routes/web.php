<?php

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


    $data_berita = [
        [
            "judul" => "Judul Berita Pertama",
            "penulis" => "Raihan Az Dzaky",
            "isi" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis vero molestias deleniti laboriosam, similique quod, amet aperiam vitae sint odio placeat, adipisci enim explicabo libero. A saepe mollitia ducimus aliquam?"
        ],
        [
            "judul" => "Judul Berita Kedua",
            "penulis" => "Aditama",
            "isi" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis vero molestias deleniti laboriosam, similique quod, amet aperiam vitae sint odio placeat, adipisci enim explicabo libero. A saepe mollitia ducimus aliquam?"
        ],
        [
            "judul" => "Judul Berita Ketiga",
            "penulis" => "Sopo jarwo",
            "isi" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis vero molestias deleniti laboriosam, similique quod, amet aperiam vitae sint odio placeat, adipisci enim explicabo libero. A saepe mollitia ducimus aliquam?"
        ]
    ];



    return view('berita', [
        "title" => "Berita",
        "beritas" => $data_berita,
    ]);
});
Route::get('/contact', function () {
    return view('kontak', [
        "title" => "Kontak",
    ]);
});
