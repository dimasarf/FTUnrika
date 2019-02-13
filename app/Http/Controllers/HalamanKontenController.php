<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\konten;

class HalamanKontenController extends Controller
{
    public function index($id)
    {
        $idKategori = $id;
        $konten = konten::getDetailContent($id);
        $sideKontens = konten::getContents(5, $konten->idKategori);
        return view('halaman-konten', compact('konten', 'sideKontens','idKategori'));
    }
}
