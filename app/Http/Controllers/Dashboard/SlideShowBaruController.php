<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\konten;

class SlideShowBaruController extends Controller
{
    public function index()
    {
        return view('dashboard.dashboard-slideshow-baru');
    }

    public function store(Request $request)
    {
        $konten = new konten();
        $konten->judul = "Sideshow";
        if($request->hasFile('image'))
        {
            $names = [];
            foreach($request->file('image') as $image)
            {
                $destinationPath = 'content_images/';
                $filename = $image->getClientOriginalName();
                $image->move($destinationPath, $filename);
                array_push($names, $filename);          

            }
            $konten->isi = json_encode($names);
        }
        $konten->idKategori = 14;
        $konten->save();
        return redirect()->route('slideshow.arsip');
    }

}
