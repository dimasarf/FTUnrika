<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\konten;
use \Illuminate\Support\HtmlString;

class KelolaHalamanController extends Controller
{
    public function index($id)
    {
        $visi = konten::where('idKategori','=', $id)->get();
        if($id == 2)
        {
            $misi = konten::where('idKategori','=', 3)->get()->first();
            return view('dashboard.dashboard-kelola-halaman', compact('visi', 'misi'));
        }
        else
            return view('dashboard.dashboard-kelola-halaman', compact('visi'));
    }
}
