@include('templates.head')
@include('components.navbar')

<div class="min-h-screen bg-gray-100 pt-28 pb-12">
    <div class="container mx-auto px-6">

        <div class="bg-white shadow-lg hover:shadow-xl transition-all rounded-2xl p-8 border border-gray-100 max-w-3xl mx-auto">

            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                Form Peminjaman Buku
            </h2>

            <form action="" method="POST" class="space-y-5">
                @csrf

                <!-- Nama -->
                <div>
                    <label class="block font-medium text-gray-700 mb-1">Nama Peminjam</label>
                    <input type="text" name="nama"
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl 
                               focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
                        placeholder="Masukkan nama lengkap" required>
                </div>

                <!-- Buku -->
                <div>
                    <label class="block font-medium text-gray-700 mb-1">Judul Buku</label>
                    <select name="buku_id"
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl 
                               focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
                        required>
                        <option value="" disabled selected>Pilih buku…</option>
                        @foreach ($books as $book)
                        <option value="{{ $book->id }}">
                            {{ $book->title }} — {{ $book->author->name ?? 'Tanpa Penulis' }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <!-- Tanggal Pinjam -->
                <div>
                    <label class="block font-medium text-gray-700 mb-1">Tanggal Pinjam</label>
                    <input type="date" name="tanggal_pinjam"
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl 
                               focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                </div>

                <!-- Tanggal Kembali -->
                <div>
                    <label class="block font-medium text-gray-700 mb-1">Tanggal Kembali</label>
                    <input type="date" name="tanggal_kembali"
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-xl 
                               focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                </div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <button type="submit"
                        class="w-full py-3 bg-blue-600 text-white font-semibold rounded-xl 
                               hover:bg-blue-700 transition shadow-md hover:shadow-lg">
                        Ajukan Peminjaman
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>


@include('templates.end')