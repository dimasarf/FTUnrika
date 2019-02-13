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
        $visi = konten::getContents(1, $id);
        $idKategori = $id;
        // return $visi;
        if($id == 2)
        {
            $misi = konten::getContents(1, 3);
            return view('dashboard.dashboard-kelola-halaman', compact('visi', 'misi', 'idKategori'));
        }
        else
            return view('dashboard.dashboard-kelola-halaman', compact('visi', 'idKategori'));
    }
}
