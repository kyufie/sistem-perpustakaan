<nav class="fixed top-0 left-0 w-full z-50">
    <div class="mx-auto max-w-7xl px-6 py-3">
        <div class="bg-white shadow-md rounded-xl px-6 py-3 flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <span class="text-xl font-semibold text-gray-800">Perpustakaan</span>
            </div>

            <ul class="flex space-x-8 text-base font-medium">
                <li>
                    <a href="{{ route('home') }}"
                        class="pb-2 border-b-2 border-transparent hover:border-blue-600 transition text-gray-600">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="{{ route('books') }}"
                        class="pb-2 border-b-2 border-transparent hover:border-blue-600 transition text-gray-600">
                        Buku
                    </a>
                </li>
                <li>
                    <a href="{{ route('borrow') }}"
                        class="pb-2 border-b-2 border-transparent hover:border-blue-600 transition text-gray-600">
                        Pinjam
                    </a>
                </li>
            </ul>

            <div class="flex items-center space-x-3">
                <a href="{{ route('profile') }}"
                    class="pb-2 border-b-2 border-transparent hover:border-blue-600 transition text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        class="w-7 h-7 text-gray-700">
                        <path fill-rule="evenodd"
                            d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>


        </div>
    </div>
</nav>