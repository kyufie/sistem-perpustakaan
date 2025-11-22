@include('templates.head')
@include('components.navbar')

<!-- DETAIL BUKU -->
<section class="container mx-auto px-6 mt-8 pt-20">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Cover Buku -->
        <div class="md:col-span-1 flex justify-center">
            <img src="{{ $book['cover'] }}" class="rounded-lg shadow-lg w-full max-w-xs">
        </div>

        <!-- Info Buku -->
        <div class="md:col-span-2 flex flex-col">
            <h2 class="text-3xl font-bold text-blue-800 mb-2">{{ $book['title'] }}</h2>
            <p class="text-gray-500 mb-4">{{ $book->author->name ?? 'Tidak ada penulis' }}</p>
            <p class="text-gray-500 mb-4">{{ $book->genre->name ?? 'Tidak ada penulis' }}</p>

            <!-- Rating -->
            <div class="flex items-center gap-2 mb-4">
                <span class="text-yellow-400 text-lg">★★★★☆</span>
                <span class="text-gray-500">(4.5 / 150 Review)</span>
            </div>

            <!-- Sinopsis -->
            <h3 class="text-xl font-semibold text-blue-700 mb-2">Sinopsis</h3>
            <p class="text-gray-700 mb-6 leading-relaxed">
                {{ $book['synopsis'] }}
            </p>

            <!-- Tombol Aksi -->
            <div class="flex gap-4">
                <button class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                    Pinjam
                </button>
                <a href="{{ url()->previous() }}" class="px-6 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400 transition">
                    Kembali
                </a>
            </div>
        </div>
    </div>
</section>


@include('templates.end')
