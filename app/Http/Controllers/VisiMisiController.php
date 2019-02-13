<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\konten;

class VisiMisiController extends Controller
{
    public function index()
    {
        $visi = konten::getContents(1,2);
        $misi = konten::getContents(1,3);
        return view('visi-misi',compact('visi','misi'));
    }
}
