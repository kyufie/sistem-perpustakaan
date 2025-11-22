@include('templates.head')
@include('components.navbar')

<!-- SPACING NAVBAR -->
<div class="pt-28"></div>

<!-- HERO SECTION -->
<section class="max-w-7xl mx-auto px-6 mb-16">
    <div class="grid md:grid-cols-2 gap-10 items-center">
        <div>
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight text-gray-900">
                Temukan Buku Terbaik
                <span class="text-blue-600">Untuk Perjalanan Belajarmu</span>
            </h1>
            <p class="text-gray-600 mt-4 text-lg leading-relaxed">
                Akses ribuan koleksi buku, rekomendasi terbaik, dan sistem peminjaman modern.
                Semuanya dalam satu platform perpustakaan digital.
            </p>

            <a href="{{ route('books') }}"
                class="inline-block mt-6 px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-md transition">
                Jelajahi Buku
            </a>
        </div>

        <div class="hidden md:block">
            <img src="https://source.unsplash.com/600x400?library"
                class="rounded-xl shadow-lg" alt="">
        </div>
    </div>
</section>


<!-- DAFTAR BUKU -->
<section class="max-w-7xl mx-auto px-6 mt-10">
    <h2 class="text-2xl font-bold mb-6">Daftar Buku</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">

        <!-- LOOPING EXAMPLE -->
        @for ($i = 0; $i < 4; $i++)
            <div class="bg-white shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 rounded-xl overflow-hidden flex flex-col border border-gray-100 transform">
            <img src="https://source.unsplash.com/random/300x40{{ $i }}?book" class="w-full h-56 object-cover">
            <div class="p-4 flex flex-col flex-grow">
                <h3 class="font-semibold text-lg mb-1">Judul Buku</h3>
                <p class="text-sm text-gray-500 mb-2">Penulis Buku</p>
                <div class="flex items-center mb-2">
                    <span class="text-yellow-400 text-lg">★★★★☆</span>
                    <span class="text-gray-500 text-sm ml-2">4.7</span>
                </div>
                <p class="text-sm text-gray-600 leading-relaxed mb-4 flex-grow">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit…
                </p>
                <a href="{{ route('book-detail') }}"
                    class="px-3 py-2 text-sm bg-blue-600 text-white rounded-lg hover:bg-blue-700 w-full mt-auto text-center">
                    Detail
                </a>
            </div>
    </div>
    @endfor

    </div>
</section>


<!-- BUKU TERATAS -->
<section class="max-w-7xl mx-auto px-6 mt-16">
    <h2 class="text-2xl font-bold mb-6">Buku Teratas</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        @for ($x = 0; $x < 3; $x++)
            <div class="flex gap-4 bg-white p-4 shadow-sm hover:shadow-lg border border-gray-100 rounded-xl transition">
            <img src="https://source.unsplash.com/random/20{{ $x }}x300?novel"
                class="w-24 rounded-lg shadow-sm">
            <div>
                <h3 class="font-semibold text-lg">Buku Populer {{ $x + 1 }}</h3>
                <p class="text-sm text-gray-500">Penulis Terkenal</p>
                <span class="inline-block bg-yellow-400 text-gray-900 px-2 py-1 text-xs font-semibold rounded mt-2">
                    Rating 4.8
                </span>
            </div>
    </div>
    @endfor

    </div>
</section>


<!-- FITUR PERPUSTAKAAN -->
<section class="bg-blue-700 text-white mt-20 py-14">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold mb-10">Kenapa Memilih Perpustakaan Kami?</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <div class="bg-white/10 backdrop-blur p-6 rounded-xl border border-white/20">
                <h3 class="font-semibold text-lg">+10.000 Koleksi Buku</h3>
                <p class="text-blue-100 mt-2">Dari berbagai kategori dan minat.</p>
            </div>

            <div class="bg-white/10 backdrop-blur p-6 rounded-xl border border-white/20">
                <h3 class="font-semibold text-lg">Fasilitas Nyaman</h3>
                <p class="text-blue-100 mt-2">Ruang baca modern dan tenang.</p>
            </div>

            <div class="bg-white/10 backdrop-blur p-6 rounded-xl border border-white/20">
                <h3 class="font-semibold text-lg">Aplikasi Modern</h3>
                <p class="text-blue-100 mt-2">Peminjaman online cepat & mudah.</p>
            </div>
        </div>
    </div>
</section>

<!-- MAPS -->
<section class="container mx-auto px-6 mt-16">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

        <!-- MAPS -->
        <div class="w-full h-80 rounded-2xl overflow-hidden shadow-lg border border-gray-200">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d761.387861180086!2d109.33819086894118!3d-7.429985383936791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6559f4d10d375f%3A0x57deaed7adab4ca8!2sGedung%20Pendidikan%20Fakultas%20Teknik%20Unsoed!5e0!3m2!1sid!2sid!4v1763798908434!5m2!1sid!2sid" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        <!-- INFORMASI -->
        <div class="flex flex-col justify-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Kontak Kami</h2>

            <p class="text-gray-600 text-lg leading-relaxed mb-4">
                <span class="font-semibold text-gray-800">Alamat:</span><br>
                Jl. Raya Mayjen Sungkono No.KM 5 <br>
                Purbalingga, Jawa Tengah, Indonesia
            </p>

            <p class="text-gray-600 text-lg leading-relaxed mb-4">
                <span class="font-semibold text-gray-800">Email:</span><br>
                admin@perpustakaan.com
            </p>

            <p class="text-gray-600 text-lg leading-relaxed">
                <span class="font-semibold text-gray-800">Telepon:</span><br>
                +62 812-3456-7890
            </p>
        </div>

    </div>
</section>


<!-- FOOTER -->
<footer class="bg-gray-900 text-gray-300 py-6 mt-8">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <p>&copy; 2025 Sistem Perpustakaan. All Rights Reserved.</p>
    </div>
</footer>

@include('templates.end')