<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\konten;

class MoreNewsController extends Controller
{
    public function index($kategori)
    {
        $kontens = konten::getAllContents($kategori);
        $sideKontens = konten::getContents(5, $kategori);
        return view('kumpulan-berita', compact('kontens', 'sideKontens'));
    }
}
