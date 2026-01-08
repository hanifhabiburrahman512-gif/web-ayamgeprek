<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelola Menu Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Pesan Sukses --}}
            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="mb-4 flex justify-end">
    <a href="{{ route('admin.menu.create') }}" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150">
        + Tambah Menu Baru
    </a>
</div>
                </div>

                <div class="overflow-x-auto"> 
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gambar</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($menus as $menu)
                                <tr>
                                    {{-- Kolom 1: Gambar --}}
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if ($menu->gambar)
                                            <img src="{{ Storage::url('public/menus/' . $menu->gambar) }}" alt="{{ $menu->nama }}" class="h-10 w-10 object-cover rounded-full">
                                        @else
                                            <span class="text-xs text-gray-400">No Image</span>
                                        @endif
                                    </td>
                                    
                                    {{-- Kolom 2: Nama --}}
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $menu->nama }}</td>
                                    
                                    {{-- Kolom 3: Kategori --}}
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ ucfirst($menu->kategori) }}</td>

                                    {{-- Kolom 4: Harga --}}
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rp {{ number_format($menu->harga, 0, ',', '.') }}</td>
                                    
                                    {{-- Kolom 5: Aksi (Edit dan Delete) --}}
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="{{ route('admin.menu.edit', $menu->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                        
                                        <form action="{{ route('admin.menu.destroy', $menu->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus menu {{ $menu->nama }}?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                {{-- Pesan jika tabel kosong --}}
                                <tr>
                                    <td colspan="5" class="px-6 py-4 text-center text-gray-500">Belum ada data menu. Silakan klik "Tambah Menu Baru" di atas.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- Paginasi --}}
                @if (isset($menus) && $menus instanceof \Illuminate\Pagination\LengthAwarePaginator)
                <div class="mt-4">
                    {{ $menus->links() }}
                </div>
                @endif
            </div>
        </div>
        <div class="pt-2 pb-3 space-y-1">
    <a href="/" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
        <i class="ri-home-4-line mr-2 text-lg"></i> Kembali ke Beranda
    </a>
</div>
    </div>
</x-app-layout>