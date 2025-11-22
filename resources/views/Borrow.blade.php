@include('templates.head')
@include('components.navbar')

<div class="mt-20 max-w-4xl mx-auto p-6">
    <h1 class="text-3xl font-semibold mb-6">Peminjaman Buku</h1>

    <div class="bg-white shadow-lg rounded-xl p-6">
        <form action="#" method="POST" class="space-y-5">
            @csrf

            <!-- Nama Peminjam -->
            <div>
                <label class="block mb-2 font-medium">Nama Peminjam</label>
                <input type="text" name="nama" class="w-full border rounded-lg px-4 py-2 focus:ring focus:ring-blue-300" placeholder="Masukkan nama peminjam">
            </div>

            <!-- Judul Buku -->
            <div>
                <label class="block mb-2 font-medium">Judul Buku</label>
                <input type="text" name="judul" class="w-full border rounded-lg px-4 py-2 focus:ring focus:ring-blue-300" placeholder="Masukkan judul buku">
            </div>

            <!-- Tanggal Pinjam -->
            <div>
                <label class="block mb-2 font-medium">Tanggal Pinjam</label>
                <input type="date" name="tanggal_pinjam" class="w-full border rounded-lg px-4 py-2 focus:ring focus:ring-blue-300">
            </div>

            <!-- Tanggal Kembali -->
            <div>
                <label class="block mb-2 font-medium">Tanggal Kembali</label>
                <input type="date" name="tanggal_kembali" class="w-full border rounded-lg px-4 py-2 focus:ring focus:ring-blue-300">
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
                Pinjam Buku
            </button>
        </form>
    </div>
</div>

@include('templates.end')
