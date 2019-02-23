<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\kemitraan;

class KemitraanArsipController extends Controller
{
    public function index()
    {
        $kemitraans = kemitraan::all();
        return view('dashboard.dashboard-kemitraan-arsip', compact('kemitraans'));
    }

    public function delete($id)
    {
        kemitraan::destroy($id);
        return back();
    }
}
