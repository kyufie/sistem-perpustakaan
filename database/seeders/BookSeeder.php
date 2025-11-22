<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            // ANDREA HIRATA
            [
                'title' => 'Laskar Pelangi',
                'author_id' => 1,
                'genre_id' => 1,
                'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHo8o1J_ICJ0N59DPpfJPX1nrljcVqTLpYKA&s',
                'synopsis' => 'Kisah inspiratif perjuangan anak-anak Belitung dalam meraih pendidikan.',
            ],
            [
                'title' => 'Sang Pemimpi',
                'author_id' => 1,
                'genre_id' => 1,
                'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR757KLAgGDMi7YQgQ2khNEQDY82vXG0bWlOA&s',
                'synopsis' => 'Petualangan Ikal dan Arai mengejar pendidikan tinggi.',
            ],
            [
                'title' => 'Edensor',
                'author_id' => 1,
                'genre_id' => 1,
                'cover' => 'https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/items/edensor.jpg',
                'synopsis' => 'Ikal dan Arai melanjutkan perjalanan akademik dan petualangan di Eropa.',
            ],

            // PRAMOEDYA
            [
                'title' => 'Bumi Manusia',
                'author_id' => 2,
                'genre_id' => 2,
                'cover' => 'https://m.media-amazon.com/images/S/compressed.photo.goodreads.com/books/1565658920i/1398034.jpg',
                'synopsis' => 'Novel sejarah tentang cinta dan perjuangan di masa kolonial.',
            ],
            [
                'title' => 'Anak Semua Bangsa',
                'author_id' => 2,
                'genre_id' => 2,
                'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4gIkiu5VOV3vz5Jh8wsadW4mzY9IbpDsLzg&s',
                'synopsis' => 'Minke menghadapi realitas sosial dan politik yang keras.',
            ],
            [
                'title' => 'Jejak Langkah',
                'author_id' => 2,
                'genre_id' => 2,
                'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKyss7bKPba2F_5NizLaZIgiSdH0Gw0hcZnA&s',
                'synopsis' => 'Perjalanan Minke membangun semangat nasionalisme.',
            ],
            [
                'title' => 'Rumah Kaca',
                'author_id' => 2,
                'genre_id' => 2,
                'cover' => 'https://cdn.gramedia.com/uploads/items/Rumah-Kaca-edit.jpg',
                'synopsis' => 'Penutup tetralogi dengan fokus pada tokoh pejabat kolonial.',
            ],

            // AHMAD FUADI
            [
                'title' => 'Negeri 5 Menara',
                'author_id' => 3,
                'genre_id' => 1,
                'cover' => 'https://cdn.gramedia.com/uploads/items/Rumah-Kaca-edit.jpg',
                'synopsis' => 'Kisah inspiratif enam santri perantau dengan impian besar.',
            ],
            [
                'title' => 'Ranah 3 Warna',
                'author_id' => 3,
                'genre_id' => 1,
                'cover' => 'https://cdn.gramedia.com/uploads/picture_meta/2023/3/9/zjcyzwxyrem9jecnszaxva.jpg',
                'synopsis' => 'Alif berjuang melewati ujian hidup dan pendidikan.',
            ],
            [
                'title' => 'Rantau 1 Muara',
                'author_id' => 3,
                'genre_id' => 1,
                'cover' => 'https://cdn.gramedia.com/uploads/picture_meta/2023/3/9/zjcyzwxyrem9jecnszaxva.jpg',
                'synopsis' => 'Perjalanan Alif mengejar mimpi hingga ke negeri rantau.',
            ],

            // TERE LIYE
            [
                'title' => 'Hafalan Shalat Delisa',
                'author_id' => 4,
                'genre_id' => 5,
                'cover' => 'https://upload.wikimedia.org/wikipedia/id/8/8a/Hafalan_Shalat_Delisa.jpeg',
                'synopsis' => 'Kisah haru Delisa setelah kehilangan akibat tsunami.',
            ],
            [
                'title' => 'Rembulan Tenggelam di Wajahmu',
                'author_id' => 4,
                'genre_id' => 5,
                'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsjP9rREWhchGjTc3blnFk21BLPiE--xhAUA&s',
                'synopsis' => 'Kisah reflektif penuh makna tentang perjalanan spiritual.',
            ],
            [
                'title' => 'Bumi',
                'author_id' => 4,
                'genre_id' => 4,
                'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpyZnXu1XiuN8TloealWuqFphnCV_D93meiQ&s',
                'synopsis' => 'Awal petualangan Raib dan Seli di dunia paralel.',
            ],

            // HABIBURRAHMAN
            [
                'title' => 'Ayat-Ayat Cinta',
                'author_id' => 5,
                'genre_id' => 3,
                'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQu2j_9mFPISVsm591DV3KlM9T56ecMTcAsBQ&s',
                'synopsis' => 'Romansa penuh nilai religius yang menyentuh.',
            ],
            [
                'title' => 'Ketika Cinta Bertasbih',
                'author_id' => 5,
                'genre_id' => 3,
                'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrTjGpjIKxhaWyUFOSDAZ2eKqhfuAaV14gnw&s',
                'synopsis' => 'Perjalanan Azzam mencari makna cinta sejati.',
            ],

            // AHMAD TOHARI
            [
                'title' => 'Ronggeng Dukuh Paruk',
                'author_id' => 6,
                'genre_id' => 5,
                'cover' => 'https://www.gramedia.com/blog/content/images/2023/05/8-4.jpg',
                'synopsis' => 'Kisah Srintil dan budaya ronggeng Jawa.',
            ],

            // EKA KURNIAWAN
            [
                'title' => 'Cantik Itu Luka',
                'author_id' => 7,
                'genre_id' => 5,
                'cover' => 'https://cdn.gramedia.com/uploads/items/9786020366517_Cantik-Itu-Luka-Hard-Cover---Limited-Edition.jpg',
                'synopsis' => 'Novel magis tentang Dewi Ayu dan tragedi keluarganya.',
            ],
            [
                'title' => 'Lelaki Harimau',
                'author_id' => 7,
                'genre_id' => 5,
                'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQz4vHfuVkQlYUHgn2EN6NwAPV27T6fK8UuKg&s',
                'synopsis' => 'Kisah gelap seorang pemuda yang dirasuki harimau putih.',
            ],

            // PIDIBAIQ
            [
                'title' => 'Dilan 1990',
                'author_id' => 8,
                'genre_id' => 6,
                'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4Gxp1GmEp2GC_eXLkRRvfIJtGDAV_61w_EA&s',
                'synopsis' => 'Romansa remaja Milea dan Dilan.',
            ],
            [
                'title' => 'Dilan 1991',
                'author_id' => 8,
                'genre_id' => 6,
                'cover' => 'https://bukukita.com/babacms/displaybuku/86106_f.jpg',
                'synopsis' => 'Kisah lanjutan hubungan Milea dan Dilan.',
            ],
        ]);
    }
}
