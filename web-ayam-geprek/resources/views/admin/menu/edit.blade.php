<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Menu: ') . $menu->nama }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    {{-- Form Edit Menu --}}
                    {{-- action: Mengarah ke rute update dan mengirimkan ID menu --}}
                    {{-- enctype: Wajib untuk upload file/gambar --}}
                    <form method="POST" action="{{ route('admin.menu.update', $menu->id) }}" enctype="multipart/form-data">
                        @csrf
                        {{-- Laravel menggunakan POST untuk form, lalu kita ganti metodenya menjadi PUT untuk fungsi update --}}
                        @method('PUT')

                        {{-- 1. Input Nama Menu --}}
                        <div class="mb-4">
                            <label for="nama" class="block text-sm font-medium text-gray-700">Nama Menu</label>
                            <input type="text" id="nama" name="nama" 
                                   value="{{ old('nama', $menu->nama) }}" 
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @error('nama') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        {{-- 2. Input Deskripsi --}}
                        <div class="mb-4">
                            <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                            <textarea id="deskripsi" name="deskripsi" rows="3"
                                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('deskripsi', $menu->deskripsi) }}</textarea>
                            @error('deskripsi') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        {{-- 3. Input Harga --}}
                        <div class="mb-4">
                            <label for="harga" class="block text-sm font-medium text-gray-700">Harga (Rp)</label>
                            <input type="number" id="harga" name="harga" 
                                   value="{{ old('harga', $menu->harga) }}" 
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @error('harga') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        {{-- 4. Input Kategori (Dropdown) --}}
                        <div class="mb-4">
                            <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                            <select id="kategori" name="kategori" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                @php
                                    $categories = ['ayam', 'saos', 'minuman']; // Sesuaikan dengan kategori Anda
                                    $selectedKategori = old('kategori', $menu->kategori);
                                @endphp
                                <option value="">Pilih Kategori</option>
                                @foreach ($categories as $kategori)
                                    <option value="{{ $kategori }}" {{ $selectedKategori == $kategori ? 'selected' : '' }}>
                                        {{ ucfirst($kategori) }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kategori') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>
                        
                        {{-- 5. Input Gambar --}}
                        <div class="mb-4">
                            <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar Baru (Opsional)</label>
                            <input type="file" id="gambar" name="gambar" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                            <p class="mt-2 text-xs text-gray-500">Abaikan jika tidak ingin mengganti gambar.</p>
                            @error('gambar') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>
                        
                        {{-- 6. Tampilan Gambar Saat Ini --}}
                        @if ($menu->gambar)
                        <div class="mb-6">
                            <p class="block text-sm font-medium text-gray-700 mb-2">Gambar Saat Ini:</p>
                            <img src="{{ Storage::url('public/menus/' . $menu->gambar) }}" alt="{{ $menu->nama }}" class="h-20 w-20 object-cover rounded shadow-md">
                        </div>
                        @endif

                        {{-- Tombol Submit --}}
                        <div class="flex justify-end">
                           <a href="{{ route('admin.menu.index') }}" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-2">Batal</a>
<button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
    Simpan perubahan
</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>