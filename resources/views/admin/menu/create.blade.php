<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Menu Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                {{-- KOREKSI UTAMA DI SINI --}}
                <form action="{{ route('admin.menu.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                        <input type="text" name="nama" id="nama" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-purple focus:ring-primary-purple" value="{{ old('nama') }}" required>
                        @error('nama') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div class="mb-4">
                        <label for="harga" class="block text-sm font-medium text-gray-700">Harga (Rp)</label>
                        <input type="number" name="harga" id="harga" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-purple focus:ring-primary-purple" value="{{ old('harga') }}" required min="0">
                        @error('harga') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>
                    
                    {{-- Hapus @include('admin.menu._kategori_field') karena Anda sudah mendefinisikan field kategori di bawah --}}
                    
                    <div class="mb-4">
                        <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-purple focus:ring-primary-purple">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    {{-- Field Kategori yang Sudah Ada --}}
                    <div class="mb-4">
                        <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori Produk</label>
                        <select name="kategori" id="kategori" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-purple focus:ring-primary-purple" required>
                            <option value="">Pilih Kategori</option>
                            
                            @php
                                $new_categories = ['ayam', 'saos', 'minuman'];
                                // $menu->kategori ?? '' hanya diperlukan jika ini adalah halaman edit. 
                                // Karena ini halaman create, cukup ambil old('kategori')
                                $old_kategori = old('kategori'); 
                            @endphp

                            @foreach ($new_categories as $cat)
                                <option value="{{ $cat }}" {{ ($old_kategori == $cat) ? 'selected' : '' }}>
                                    {{ ucfirst($cat) }}
                                </option>
                            @endforeach
                            
                        </select>
                        @error('kategori') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div class="mb-4">
                        <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar Produk</label>
                        <input type="file" name="gambar" id="gambar" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-primary-purple file:text-white hover:file:bg-secondary-indigo">
                        @error('gambar') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div class="flex justify-end">
                        <a href="{{ route('admin.menu.index') }}" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-2">Batal</a>
                        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Simpan Menu
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>