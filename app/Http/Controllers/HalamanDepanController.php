<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\konten;

class HalamanDepanController extends Controller
{
    public function index()
    {   
        $beritas = konten::getContents(3, 1);
        $pengumumans = konten::getContents(3, 5);
        $profil = konten::getContents(1, 4);
        $gambars = konten::getAllContents(14);
        return view('halamanDepan', compact('beritas', 'pengumumans', 'profil', 'gambars'));
    }
}
