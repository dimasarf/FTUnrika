<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\konten;
use App\visitor;

class HalamanKontenController extends Controller
{
    public function index($id)
    {
        $konten = konten::getDetailContent($id);
        $sideKontens = konten::getContents(5, $konten->idKategori);
        visitor::store($id);
        $filess = explode("|",$konten->file );
        return view('halaman-konten', compact('konten', 'sideKontens', 'filess'));
    }
}
