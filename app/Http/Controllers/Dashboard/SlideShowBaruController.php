<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\konten;

class SlideShowBaruController extends Controller
{
    public function index($id)
    {
        $idKategori = $id;
        return view('dashboard.dashboard-slideshow-baru' ,compact('idKategori'));
    }

    public function store($id,Request $request)
    {
        if($request->hasFile('image'))
        {
            $names = [];
            foreach($request->file('image') as $image)
            {
                $destinationPath = 'content_images/';
                $filename = $image->getClientOriginalName();
                $image->move($destinationPath, $filename);
                $konten = new konten();
                $konten->judul = $request->judul;
                $konten->isi = $filename;
                $konten->idKategori = $id;
                $konten->save();
            }
        }
        if($id == 14)
            return redirect()->route('slideshow.arsip');
        else
            return redirect()->route('konten-arsip', ['id' => 5]);
    }
}
