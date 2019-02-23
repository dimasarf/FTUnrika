<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\kemitraan;

class KemitraanBaruController extends Controller
{
    public function index()
    {
        return view('dashboard.dashboard-kemitraan-baru');
    }

    public function store(Request $request)
    {
        if($request->hasFile('logo'))
        {
            foreach($request->file('logo') as $image)
            {
                $destinationPath = 'logo_kemitraan/';
                $filename = $image->getClientOriginalName();
                $image->move($destinationPath, $filename);
                $kemitraan = new kemitraan();
                $kemitraan->instansi = $request->instansi;
                $kemitraan->logo = $filename;
                $kemitraan->tglBerlaku = $request->tglBerlaku;
                $kemitraan->bidang = $request->bidang;
                $kemitraan->save();
                $request->session()->flash('status', 'Data Berhasil Disimpan!');
                return back();
            }
        }
    }

    public function indexEdit($id)
    {
        $kemitraan = kemitraan::find($id);
        return view('dashboard.dashboard-kemitraan-baru', compact('kemitraan'));
    }

    public function update($id,Request $request)
    {
        $kemitraan = kemitraan::find($id);
        $kemitraan->instansi = $request->instansi;
        if($request->hasFile('logo'))
        {
            foreach($request->file('logo') as $image)
            {
                $destinationPath = 'logo_kemitraan/';
                $filename = $image->getClientOriginalName();
                $image->move($destinationPath, $filename);
                $kemitraan->logo = $filename;
            }
        }
        $kemitraan->tglBerlaku = $request->tglBerlaku;
        $kemitraan->bidang = $request->bidang;
        $kemitraan->save();
        $request->session()->flash('status', 'Data Berhasil Disimpan!');
        return back();
    }
}
