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

    public function indexEdit($id)
    {
        $slideshow = konten::find($id);
        return view('dashboard.dashboard-slideshow-baru', compact('slideshow'));
    }

    public function update($id,Request $request)
    {
        $slideshow = konten::find($id);
        if($request->hasFile('image'))
        {
            foreach($request->file('image') as $image)
            {
                $destinationPath = 'content_images/';
                $filename = $image->getClientOriginalName();
                $image->move($destinationPath, $filename);
                $slideshow->isi = $filename;
            }
        }
        $slideshow->judul = $request->judul;
        $slideshow->save();
        if($slideshow->idKategori == 14)
            return redirect()->route('slideshow.arsip');
        else
            return redirect()->route('konten-arsip', ['id' => 5]);
    }
}
