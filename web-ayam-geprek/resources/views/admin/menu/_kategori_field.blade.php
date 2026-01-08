{{-- resources/views/admin/menu/_kategori_field.blade.php --}}
<div class="mb-4">
    <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori Produk</label>
    <select name="kategori" id="kategori" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-purple focus:ring-primary-purple" required>
        <option value="">Pilih Kategori</option>
        
        @php
            // Definisi kategori baru yang harus sama dengan yang ada di Controller (store/update)
            $new_categories = ['ayam', 'saos', 'minuman'];
            
            // Mengambil nilai lama: 
            // - old('kategori') untuk saat terjadi error validasi (create)
            // - $menu->kategori ?? '' untuk saat mengedit data ($menu harus tersedia)
            $old_kategori = old('kategori', $menu->kategori ?? ''); 
        @endphp

        @foreach ($new_categories as $cat)
            <option value="{{ $cat }}" {{ ($old_kategori == $cat) ? 'selected' : '' }}>
                {{ ucfirst($cat) }}
            </option>
        @endforeach
        
    </select>
    @error('kategori') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
</div>