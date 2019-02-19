<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\konten;
use App\visitor;

class DashboardIndexController extends Controller
{
    public function index()
    {
        $total_berita = konten::where('idKategori',1)->count();
        $total_pengumuman = konten::where('idKategori',5)->count();
        $total_jurnal = konten::where('idKategori',8)->count();
        $stat = visitor::getStat();
        $statKonten = visitor::getContentStat();
        // return $statKonten;
        return view('dashboard.dashboard-index', compact('total_berita', 'total_pengumuman', 'total_jurnal','stat','statKonten'));
    }
}
