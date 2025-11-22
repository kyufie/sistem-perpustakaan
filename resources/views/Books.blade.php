@include('templates.head')
@include('components.navbar')

<div class="pt-20"></div>

<section class="container mx-auto px-6 mt-6">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
        <form action="{{ route('books') }}" method="GET"
            class="group flex w-full md:w-1/2 items-center">

            <!-- INPUT -->
            <input type="text" name="search"
                placeholder="Cari judul, penulis, atau ISBN..."
                value="{{ request('search') }}"
                class="flex-grow px-5 py-2 
                  border border-gray-300 
                  rounded-full
                  focus:outline-none focus:ring-2 focus:ring-blue-500
                  transition-all duration-300" />

            <!-- BUTTON (hidden until focus) -->
            <button type="submit"
                class="ml-2
               opacity-0 group-focus-within:opacity-100
               scale-75 group-focus-within:scale-100
               transition-all duration-300 
               px-5 py-2 bg-blue-600 text-white 
               rounded-full
               hover:bg-blue-700 flex items-center">

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 mr-1" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                Cari
            </button>

        </form>



        <div class="flex gap-2 flex-wrap">
            <a href="{{ route('books', ['category' => 'Novel']) }}"
                class="px-4 py-2 text-sm font-medium rounded-full transition duration-300 
                {{ request('category') == 'Novel' ? 'bg-blue-600 text-white shadow-md' : 'bg-gray-200 text-gray-700 hover:bg-blue-100' }}">Novel</a>

            <a href="{{ route('books', ['category' => 'Teknologi']) }}"
                class="px-4 py-2 text-sm font-medium rounded-full transition duration-300 
                {{ request('category') == 'Teknologi' ? 'bg-blue-600 text-white shadow-md' : 'bg-gray-200 text-gray-700 hover:bg-blue-100' }}">Teknologi</a>

            <a href="{{ route('books', ['category' => 'Pendidikan']) }}"
                class="px-4 py-2 text-sm font-medium rounded-full transition duration-300 
                {{ request('category') == 'Pendidikan' ? 'bg-blue-600 text-white shadow-md' : 'bg-gray-200 text-gray-700 hover:bg-blue-100' }}">Pendidikan</a>

            <a href="{{ route('books') }}"
                class="px-4 py-2 text-sm font-medium rounded-full transition duration-300 
               {{ !request('category') ? 'bg-blue-600 text-white shadow-md' : 'bg-gray-200 text-gray-700 hover:bg-blue-100' }}">Semua</a>
        </div>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
        @for ($i = 1; $i <= 5; $i++)
            <div class="bg-white shadow-lg hover:shadow-xl transition-all duration-300 rounded-xl overflow-hidden flex flex-col transform hover:-translate-y-1">
            <img src="https://source.unsplash.com/random/30{{ $i }}x400?book,library" class="w-full h-64 object-cover">

            <div class="p-4 flex flex-col flex-grow">
                <span class="text-xs text-blue-500 font-semibold mb-1 uppercase">Kategori {{ $i }}</span>
                <h3 class="font-bold text-lg mb-1 text-gray-800 line-clamp-2">Judul Buku {{ $i }} yang Agak Panjang</h3>
                <p class="text-sm text-gray-500 mb-2">Penulis Terkenal</p>

                <div class="flex items-center mb-4">
                    <span class="text-yellow-500 text-base">★★★★★</span>
                    <span class="text-gray-500 text-xs ml-2">(4.{{ $i }})</span>
                </div>

                <a href="{{ route('book-detail') }}" class="px-3 py-2 text-sm bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300 w-full mt-auto text-center">
                    Lihat Detail
                </a>
            </div>
    </div>
    @endfor
    </div>
</section>

@include('templates.end')