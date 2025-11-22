<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('genres')->insert([
            ['id' => 1, 'name' => 'Fiksi Inspiratif'],
            ['id' => 2, 'name' => 'Sejarah / Kolonial'],
            ['id' => 3, 'name' => 'Religi / Romansa'],
            ['id' => 4, 'name' => 'Fiksi Aksi / Thriller'],
            ['id' => 5, 'name' => 'Drama'],
            ['id' => 6, 'name' => 'Romansa Remaja'],
            ['id' => 7, 'name' => 'Humor'],
        ]);
    }
}
