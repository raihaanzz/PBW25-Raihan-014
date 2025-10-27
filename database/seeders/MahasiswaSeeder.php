<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('mahasiswas')->insert([
            'name' => "dadang supriatna",
            'nim' => 123456786,
            'prodi' => "Teknik Informatika",
            'email' => "dadanggan@gmail.com",
            'nohp' => 6281234567890,
        ]);
    }
}
