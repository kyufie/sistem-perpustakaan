<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('authors')->insert([
            [
                'id' => 1,
                'name' => 'Andrea Hirata',
                'address' => 'Jl. Laskar Pelangi No. 1, Belitung',
            ],
            [
                'id' => 2,
                'name' => 'Pramoedya Ananta Toer',
                'address' => 'Jl. Bumi Manusia No. 2, Blora',
            ],
            [
                'id' => 3,
                'name' => 'Ahmad Fuadi',
                'address' => 'Jl. Manara No. 5, Sumatera Barat',
            ],
            [
                'id' => 4,
                'name' => 'Tere Liye',
                'address' => 'Jl. Pulang No. 7, Jakarta',
            ],
            [
                'id' => 5,
                'name' => 'Habiburrahman El Shirazy',
                'address' => 'Jl. Mesir No. 9, Semarang',
            ],
            [
                'id' => 6,
                'name' => 'Ahmad Tohari',
                'address' => 'Jl. Banyumas No. 10, Purwokerto',
            ],
            [
                'id' => 7,
                'name' => 'Eka Kurniawan',
                'address' => 'Jl. Cantik No. 3, Tasikmalaya',
            ],
            [
                'id' => 8,
                'name' => 'Pidi Baiq',
                'address' => 'Jl. Bandung No. 19, Bandung',
            ],
        ]);
    }
}
