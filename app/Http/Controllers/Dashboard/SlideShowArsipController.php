<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\konten;

class SlideShowArsipController extends Controller
{
    public function index()
    {
        $kontens = konten::where('idKategori','=', 14)->get();
        return view('dashboard.dashboard-slideshow-arsip', compact('kontens'));
    }
}
