<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Menggunakan paginate untuk daftar menu
        $menus = Menu::orderBy('id', 'desc')->paginate(10); 
        return view('admin.menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validasi Input
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|integer|min:0',
            'kategori' => 'required|string|in:ayam,saos,minuman',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
        
        $data = $validatedData;
        $data['gambar'] = null; // Inisialisasi default NULL

        // 2. Unggah Gambar
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            
            // Buat nama file unik: timestamp_namaasli.ekstensi
            $nama_file_unik = time() . '_' . $gambar->getClientOriginalName(); 
            
            // Simpan file ke storage (storage/app/public/menus)
            $gambar->storeAs('public/menus', $nama_file_unik);
            
            // Simpan nama file unik ke array data
            $data['gambar'] = $nama_file_unik;
        } 
        
        // 3. Simpan Data ke Database
        Menu::create($data);

        return redirect()->route('admin.menu.index')->with('success', 'Menu baru berhasil ditambahkan!');
    }
        
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Dikosongkan
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        return view('admin.menu.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu) 
    {
        // 1. Validasi Input
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|integer|min:0',
            'kategori' => 'required|string|in:ayam,saos,minuman', 
            // Pastikan validasi gambar hanya opsional saat update
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        $data = $validatedData;

        // 2. Proses Gambar
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($menu->gambar) {
                Storage::delete('public/menus/' . $menu->gambar);
            }
            
            // Simpan gambar baru dengan nama unik
            $gambar = $request->file('gambar');
            $nama_file_unik = time() . '_' . $gambar->getClientOriginalName();

            $gambar->storeAs('public/menus', $nama_file_unik);
            
            // Masukkan nama file baru ke data yang akan diupdate
            $data['gambar'] = $nama_file_unik;
        } else {
            // Jika tidak ada gambar baru yang diunggah, 
            // hapus key 'gambar' dari array $data agar gambar lama tetap dipertahankan
            unset($data['gambar']);
        }
        
        // 3. Update Data
        $menu->update($data);

        return redirect()->route('admin.menu.index')
                         ->with('success', 'Menu ' . $menu->nama . ' berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu) 
    {
        // 1. Hapus gambar dari storage
        if ($menu->gambar) {
            Storage::delete('public/menus/' . $menu->gambar);
        }
        
        // 2. Hapus record dari database
        $menu->delete();

        return redirect()->route('admin.menu.index')->with('success', 'Menu berhasil dihapus!');
    }
}