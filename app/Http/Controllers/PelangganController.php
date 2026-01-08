<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
       $menus = Menu::orderBy('nama', 'asc')->get();
       
    return view('pelanggan.beranda', compact('menus'));
    }
}