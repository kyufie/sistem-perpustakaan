@include('templates.head')
@include('components.navbar')

<div class="pt-20"></div>

<!-- SEARCH & FILTER -->
<section class="container mx-auto px-6 mt-6">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
        <!-- Search Bar -->
        <form action="{{ route('books') }}" method="GET" class="flex w-full md:w-1/2">
            <input type="text" name="search" placeholder="Cari buku..." value="{{ request('search') }}"
                class="flex-grow px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-r-md hover:bg-blue-700">
                Cari
            </button>
        </form>

        <!-- Filter Kategori -->
        <div class="flex gap-2 flex-wrap">
            <a href="{{ route('books', ['category' => 'Novel']) }}"
                class="px-4 py-2 bg-gray-200 rounded hover:bg-blue-100">Novel</a>
            <a href="{{ route('books', ['category' => 'Teknologi']) }}"
                class="px-4 py-2 bg-gray-200 rounded hover:bg-blue-100">Teknologi</a>
            <a href="{{ route('books', ['category' => 'Pendidikan']) }}"
                class="px-4 py-2 bg-gray-200 rounded hover:bg-blue-100">Pendidikan</a>
            <a href="{{ route('books') }}" class="px-4 py-2 bg-gray-200 rounded hover:bg-blue-100">Semua</a>
        </div>
    </div>

    <!-- DAFTAR BUKU -->
    <!-- DAFTAR BUKU -->
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
    <!-- CARD 1 -->
    <div class="bg-white shadow-md hover:shadow-xl transition-all rounded-lg overflow-hidden flex flex-col">
        <img src="https://source.unsplash.com/random/300x400?book" class="w-full h-52 object-cover">

        <div class="p-4 flex flex-col flex-grow">
            <h3 class="font-semibold text-lg mb-1">Judul Buku 1</h3>
            <p class="text-sm text-gray-500 mb-2">Penulis Buku 1</p>

            <div class="flex items-center mb-2">
                <span class="text-yellow-400 text-lg">★★★★★</span>
                <span class="text-gray-500 text-sm ml-2">4.8</span>
            </div>

            <p class="text-sm text-gray-600 leading-relaxed mb-4 flex-grow">
                Sinopsis singkat buku ini yang menjelaskan inti cerita secara ringkas...
            </p>

            <a href="{{ route('book-detail') }}" class="px-3 py-2 text-sm bg-blue-600 text-white rounded hover:bg-blue-700 w-full mt-auto text-center">
                Detail
            </a>
        </div>
    </div>

    <!-- CARD 2 -->
    <div class="bg-white shadow-md hover:shadow-xl transition-all rounded-lg overflow-hidden flex flex-col">
        <img src="https://source.unsplash.com/random/301x400?book" class="w-full h-52 object-cover">

        <div class="p-4 flex flex-col flex-grow">
            <h3 class="font-semibold text-lg mb-1">Judul Buku 2</h3>
            <p class="text-sm text-gray-500 mb-2">Penulis Buku 2</p>

            <div class="flex items-center mb-2">
                <span class="text-yellow-400 text-lg">★★★★☆</span>
                <span class="text-gray-500 text-sm ml-2">4.2</span>
            </div>

            <p class="text-sm text-gray-600 leading-relaxed mb-4 flex-grow">
                Sinopsis singkat buku ini yang menjelaskan inti cerita secara ringkas...
            </p>

            <a href="#" class="px-3 py-2 text-sm bg-blue-600 text-white rounded hover:bg-blue-700 w-full mt-auto text-center">
                Detail
            </a>
        </div>
    </div>

    <!-- CARD 3 -->
    <div class="bg-white shadow-md hover:shadow-xl transition-all rounded-lg overflow-hidden flex flex-col">
        <img src="https://source.unsplash.com/random/302x400?book" class="w-full h-52 object-cover">

        <div class="p-4 flex flex-col flex-grow">
            <h3 class="font-semibold text-lg mb-1">Judul Buku 3</h3>
            <p class="text-sm text-gray-500 mb-2">Penulis Buku 3</p>

            <div class="flex items-center mb-2">
                <span class="text-yellow-400 text-lg">★★★★★</span>
                <span class="text-gray-500 text-sm ml-2">5.0</span>
            </div>

            <p class="text-sm text-gray-600 leading-relaxed mb-4 flex-grow">
                Sinopsis singkat buku ini yang menjelaskan inti cerita secara ringkas...
            </p>

            <a href="#" class="px-3 py-2 text-sm bg-blue-600 text-white rounded hover:bg-blue-700 w-full mt-auto text-center">
                Detail
            </a>
        </div>
    </div>

    <!-- CARD 4 -->
    <div class="bg-white shadow-md hover:shadow-xl transition-all rounded-lg overflow-hidden flex flex-col">
        <img src="https://source.unsplash.com/random/303x400?book" class="w-full h-52 object-cover">

        <div class="p-4 flex flex-col flex-grow">
            <h3 class="font-semibold text-lg mb-1">Judul Buku 4</h3>
            <p class="text-sm text-gray-500 mb-2">Penulis Buku 4</p>

            <div class="flex items-center mb-2">
                <span class="text-yellow-400 text-lg">★★★☆☆</span>
                <span class="text-gray-500 text-sm ml-2">3.7</span>
            </div>

            <p class="text-sm text-gray-600 leading-relaxed mb-4 flex-grow">
                Sinopsis singkat buku ini yang menjelaskan inti cerita secara ringkas...
            </p>

            <a href="#" class="px-3 py-2 text-sm bg-blue-600 text-white rounded hover:bg-blue-700 w-full mt-auto text-center">
                Detail
            </a>
        </div>
    </div>
</div>


    
</section>

@include('templates.end')
