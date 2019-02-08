<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\konten;
use App\kategori;

class KontenBaruController extends Controller
{
    public function index($id)
    {
        $kategori = $id;
        return view('dashboard.dashboard-konten-baru', compact('kategori'));
    }

    public function store(Request $request)
    {
        $detail = $request->summernoteInput;
        $dom = new \domdocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        
        $images = $dom->getelementsbytagname('img');        
        foreach ($images as $k => $img)
        {
          $data = $img->getattribute('src');          
          list($type, $data) = explode(';', $data);
          list(,$data) = explode(',',$data);

          $data = base64_decode($data);
          $image_name = time().$k.'png';
          $path = public_path().'/'.$image_name;

          file_put_contents($path, $data);
          $img->setattribute('src',$image_name);
        }

        $detail = $dom->savehtml();

        $konten = new konten();
        $konten->judul = $request->judul;
        $konten->isi = $request->summernoteInput;
        $konten->idKategori = $request->idkategori;
        $konten->save();
        $request->session()->flash('status', 'Data Berhasil Disimpan!');
        return Redirect('/konten-baru/'.$request->idkategori);
    }
}
