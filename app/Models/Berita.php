<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    private static $data_berita = [
        [
            "judul" => "Unjuk Rasa Tolak Kenaikan BBM di Depan Gedung DPR",
            "slug" => "unjuk-rasa-tolak-kenaikan-bbm-di-depan-gedung-dpr",
            "penulis" => "Raihan Az Dzaky",
            "isi" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis vero molestias deleniti laboriosam, similique quod, amet aperiam vitae sint odio placeat, adipisci enim explicabo libero. A saepe mollitia ducimus aliquam?"
        ],
        [
            "judul" => "Sejarah Singkat Pendidikan di Indonesia",
            "slug" => "sejarah-singkat-pendidikan-di-indonesia",
            "penulis" => "Aditama",
            "isi" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis vero molestias deleniti laboriosam, similique quod, amet aperiam vitae sint odio placeat, adipisci enim explicabo libero. A saepe mollitia ducimus aliquam?"
        ],
        [
            "judul" => "Sopo Jarwo: Serial Animasi Favorit Anak-anak",
            "slug" => "sopo-jarwo-serial-animasi-favorit-anak-anak",
            "penulis" => "Sopo jarwo",
            "isi" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis vero molestias deleniti laboriosam, similique quod, amet aperiam vitae sint odio placeat, adipisci enim explicabo libero. A saepe mollitia ducimus aliquam?"
        ]
    ];

    public static function ambildata() {
        return Self::$data_berita;
    }

    public static function caridata($slug) {
        $data_beritas = Self::$data_berita;

        $new_berita = [];

     foreach ($data_beritas as $berita) {
        if ($berita["slug"] === $slug) {
            $new_berita = $berita; // $berita isinya array = [ "judul", "slug", "penulis", "isi"]
        }
      }
      return $new_berita;
    }   
}
