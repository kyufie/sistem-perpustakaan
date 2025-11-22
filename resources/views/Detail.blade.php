@include('templates.head')
@include('components.navbar')

<!-- DETAIL BUKU -->
<section class="container mx-auto px-6 mt-8 pt-20">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Cover Buku -->
        <div class="md:col-span-1 flex justify-center">
            <img src="https://via.placeholder.com/300x450/CCCCCC/888888?text=Book+Cover" class="rounded-lg shadow-lg w-full max-w-xs">
        </div>

        <!-- Info Buku -->
        <div class="md:col-span-2 flex flex-col">
            <h2 class="text-3xl font-bold text-blue-800 mb-2">Judul Buku Lengkap</h2>
            <p class="text-gray-500 mb-4">Penulis Terkenal</p>

            <!-- Rating -->
            <div class="flex items-center gap-2 mb-4">
                <span class="text-yellow-400 text-lg">★★★★☆</span>
                <span class="text-gray-500">(4.5 / 150 Review)</span>
            </div>

            <!-- Info tambahan -->
            <div class="grid grid-cols-2 gap-4 text-gray-700 mb-6">
                <p><span class="font-semibold">Kategori:</span> Pendidikan</p>
                <p><span class="font-semibold">Tahun Terbit:</span> 2025</p>
                <p><span class="font-semibold">Bahasa:</span> Indonesia</p>
                <p><span class="font-semibold">ISBN:</span> 978-1234567890</p>
            </div>

            <!-- Sinopsis -->
            <h3 class="text-xl font-semibold text-blue-700 mb-2">Sinopsis</h3>
            <p class="text-gray-700 mb-6 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod, lectus vitae pretium tincidunt, sapien quam feugiat eros, a facilisis sapien purus ac justo. Sed non lorem a urna porttitor suscipit. Curabitur ac ipsum id libero facilisis posuere.
            </p>

            <!-- Tombol Aksi -->
            <div class="flex gap-4">
                <button class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                    Pinjam
                </button>
                <button class="px-6 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400 transition">
                    Kembali
                </button>
            </div>
        </div>
    </div>
</section>


@include('templates.end')