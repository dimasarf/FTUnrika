<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\konten;

class KontnArsipController extends Controller
{
    public function index($id)
    {
        if($id == 5)
        {
            $kontens = konten::where('idKategori','=', $id)
                        ->orWhere('idKategori', '=', 15)
                        ->get();
        }
        else
        {
            $kontens = konten::where('idKategori','=', $id)->get();
        }
        return view('dashboard.dashboard-konten-arsip', compact('kontens'));
    }

    public function delete($id)
    {
        konten::destroy($id);
        return back();
    }

    public function indexJurusan()
    {
        $konten_jurusans = konten::getContentsAll();
        return view('dashboard.dashboard-konten-arsip', compact('konten_jurusans'));
    }
}
