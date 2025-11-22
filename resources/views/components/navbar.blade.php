
<nav class="bg-white shadow-md fixed top-0 left-0 w-full z-50">
    <div class="container mx-auto px-6 py-4 flex items-center justify-between">
        <h1 class="text-2xl font-bold text-blue-600">Perpustakaan</h1>

        <ul class="flex gap-6">
            <li><a href="{{ route('home') }}" class="hover:text-blue-600">Beranda</a></li>
            <li><a href="{{ route('books') }}" class="hover:text-blue-600">Buku</a></li>
            <li><a href="{{ route('borrow') }}" class="hover:text-blue-600">Pinjam</a></li>
            <li><a href="{{ route('profile') }}" class="hover:text-blue-600">Profil</a></li>
        </ul>
    </div>
</nav>