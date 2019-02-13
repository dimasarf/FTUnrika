<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\konten;

class StrukturController extends Controller
{
    public function index($id)
    {
        $konten = konten::getContents(1, $id);
        return view('struktur-organisasi', compact('konten'));
    }
}
