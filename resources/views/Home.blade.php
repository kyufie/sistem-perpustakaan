@include('templates.head')
@include('components.navbar')

    <div class="pt-20"></div>

    <!-- SLIDESHOW EVENT -->
    <section class="container mx-auto px-6 mt-6">
        <h2 class="text-2xl font-bold mb-4">Event Terbaru</h2>

        <div class="relative w-full h-60 rounded-lg overflow-hidden shadow-md">
            <div class="absolute inset-0 bg-cover bg-center duration-500 animate-pulse" style="background-image: url('https://source.unsplash.com/random/800x400?library');"></div>
            <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                <h3 class="text-white text-3xl font-semibold">Literasi & Talkshow 2025</h3>
            </div>
        </div>
    </section>

<!-- DAFTAR BUKU -->
<section class="container mx-auto px-6 mt-12">
    <h2 class="text-2xl font-bold mb-4">Daftar Buku</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">

        <!-- CARD BUKU -->
        <div class="bg-white shadow-md hover:shadow-xl transition-all rounded-lg overflow-hidden flex flex-col">
            <img src="https://source.unsplash.com/random/300x400?book" class="w-full h-52 object-cover">

            <div class="p-4 flex flex-col flex-grow">
                <h3 class="font-semibold text-lg mb-1">Judul Buku</h3>
                <p class="text-sm text-gray-500 mb-2">Penulis Buku</p>

                <!-- Rating -->
                <div class="flex items-center mb-2">
                    <span class="text-yellow-400 text-lg">★★★★★</span>
                    <span class="text-gray-500 text-sm ml-2">4.8</span>
                </div>

                <!-- Sinopsis -->
                <p class="text-sm text-gray-600 leading-relaxed mb-4 flex-grow">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec tortor non lorem...
                </p>

                <!-- Tombol Detail full-width di bawah -->
                <button class="px-3 py-2 text-sm bg-blue-600 text-white rounded hover:bg-blue-700 w-full mt-auto">
                    Detail
                </button>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="bg-white shadow-md hover:shadow-xl transition-all rounded-lg overflow-hidden flex flex-col">
            <img src="https://source.unsplash.com/random/301x400?book" class="w-full h-52 object-cover">

            <div class="p-4 flex flex-col flex-grow">
                <h3 class="font-semibold text-lg mb-1">Judul Buku</h3>
                <p class="text-sm text-gray-500 mb-2">Penulis Buku</p>

                <div class="flex items-center mb-2">
                    <span class="text-yellow-400 text-lg">★★★★☆</span>
                    <span class="text-gray-500 text-sm ml-2">4.2</span>
                </div>

                <p class="text-sm text-gray-600 leading-relaxed mb-4 flex-grow">
                    Dolor sit amet consectetur adipisicing elit. Alias temporibus harum minus libero...
                </p>

                <button class="px-3 py-2 text-sm bg-blue-600 text-white rounded hover:bg-blue-700 w-full mt-auto">
                    Detail
                </button>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="bg-white shadow-md hover:shadow-xl transition-all rounded-lg overflow-hidden flex flex-col">
            <img src="https://source.unsplash.com/random/302x400?novel" class="w-full h-52 object-cover">

            <div class="p-4 flex flex-col flex-grow">
                <h3 class="font-semibold text-lg mb-1">Judul Buku</h3>
                <p class="text-sm text-gray-500 mb-2">Penulis Buku</p>

                <div class="flex items-center mb-2">
                    <span class="text-yellow-400 text-lg">★★★★★</span>
                    <span class="text-gray-500 text-sm ml-2">5.0</span>
                </div>

                <p class="text-sm text-gray-600 leading-relaxed mb-4 flex-grow">
                    Novel yang sangat menyentuh dan menarik untuk semua kalangan pembaca...
                </p>

                <button class="px-3 py-2 text-sm bg-blue-600 text-white rounded hover:bg-blue-700 w-full mt-auto">
                    Detail
                </button>
            </div>
        </div>

        <!-- CARD 4 -->
        <div class="bg-white shadow-md hover:shadow-xl transition-all rounded-lg overflow-hidden flex flex-col">
            <img src="https://source.unsplash.com/random/303x400?education" class="w-full h-52 object-cover">

            <div class="p-4 flex flex-col flex-grow">
                <h3 class="font-semibold text-lg mb-1">Judul Buku</h3>
                <p class="text-sm text-gray-500 mb-2">Penulis Buku</p>

                <div class="flex items-center mb-2">
                    <span class="text-yellow-400 text-lg">★★★☆☆</span>
                    <span class="text-gray-500 text-sm ml-2">3.7</span>
                </div>

                <p class="text-sm text-gray-600 leading-relaxed mb-4 flex-grow">
                    Buku pendidikan yang membahas teori dan aplikasi modern dunia belajar...
                </p>

                <button class="px-3 py-2 text-sm bg-blue-600 text-white rounded hover:bg-blue-700 w-full mt-auto">
                    Detail
                </button>
            </div>
        </div>

    </div>
</section>

    <!-- BUKU TERATAS -->
    <section class="container mx-auto px-6 mt-12">
        <h2 class="text-2xl font-bold mb-4">Buku Teratas</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="flex gap-4 bg-white p-4 shadow rounded-lg">
                <img src="https://source.unsplash.com/random/200x300?bestseller" class="w-24 rounded-md">
                <div>
                    <h3 class="font-semibold text-lg">Buku Populer 1</h3>
                    <p class="text-sm text-gray-500">Penulis Terkenal</p>
                    <span class="inline-block bg-yellow-400 px-2 py-1 text-xs rounded mt-2">Rating 4.8</span>
                </div>
            </div>

            <div class="flex gap-4 bg-white p-4 shadow rounded-lg">
                <img src="https://source.unsplash.com/random/201x300?bestseller" class="w-24 rounded-md">
                <div>
                    <h3 class="font-semibold text-lg">Buku Populer 2</h3>
                    <p class="text-sm text-gray-500">Penulis Terkenal</p>
                    <span class="inline-block bg-yellow-400 px-2 py-1 text-xs rounded mt-2">Rating 4.7</span>
                </div>
            </div>

            <div class="flex gap-4 bg-white p-4 shadow rounded-lg">
                <img src="https://source.unsplash.com/random/202x300?bestseller" class="w-24 rounded-md">
                <div>
                    <h3 class="font-semibold text-lg">Buku Populer 3</h3>
                    <p class="text-sm text-gray-500">Penulis Terkenal</p>
                    <span class="inline-block bg-yellow-400 px-2 py-1 text-xs rounded mt-2">Rating 4.6</span>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION TAMBAHAN: INFORMASI PERPUSTAKAAN -->
    <section class="bg-blue-600 text-white mt-16 py-10">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-4">Kenapa Memilih Perpustakaan Kami?</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white/10 p-6 rounded-lg">
                    <h3 class="font-semibold text-lg">+10.000 Koleksi Buku</h3>
                    <p class="text-sm mt-2 text-blue-100">Buku lengkap dari berbagai kategori.</p>
                </div>

                <div class="bg-white/10 p-6 rounded-lg">
                    <h3 class="font-semibold text-lg">Fasilitas Nyaman</h3>
                    <p class="text-sm mt-2 text-blue-100">Ruang baca modern dan tenang.</p>
                </div>

                <div class="bg-white/10 p-6 rounded-lg">
                    <h3 class="font-semibold text-lg">Aplikasi Modern</h3>
                    <p class="text-sm mt-2 text-blue-100">Peminjaman online cepat & mudah.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-gray-900 text-gray-300 py-6 mt-10">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2025 Sistem Perpustakaan. All Rights Reserved.</p>
        </div>
    </footer>
@include('templates.end')