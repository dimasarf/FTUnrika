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

    public function indexJurusan()
    {
        $kategoris = kategori::all();
        return view('dashboard.dashboard-konten-baru', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $konten = new konten();
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
        $files = array();
        if($request->hasFile('file'))
        {
            foreach($request->file('file') as $file)
            {
                $destinationPath = 'file/';
                $filename = $file->getClientOriginalName();
                $file->move($destinationPath, $filename);
                $files[] = $filename;
            }
            $konten->file = implode("|", $files);
        }

        $detail = $dom->savehtml();
        
        $konten->judul = $request->judul;
        $konten->isi = $request->summernoteInput;
        $konten->idKategori = $request->idkategori;
        $konten->save();
        $request->session()->flash('status', 'Data Berhasil Disimpan!');
        return Redirect('/konten-baru/'.$request->idkategori);
    }

    public function update($id, Request $request)
    {
        $konten = konten::find($id);

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

        if($request->hasFile('file'))
        {
            $name = [];
            foreach($request->file('file') as $file)
            {
                $destinationPath = 'file/';
                $filename = $file->getClientOriginalName();
                $file->move($destinationPath, $filename);
                array_push($filename);
            }
            $konten->file = implode("|", $files);
        }

        $detail = $dom->savehtml();

        $konten->judul = $request->judul;
        $konten->isi = $request->summernoteInput;
        $konten->idKategori = $request->idkategori;
        $konten->save();
        return $konten->file;
        $request->session()->flash('status', 'Data Berhasil Disimpan!');
        return back();
    }

    public function indexEditHalaman($id)
    {
        $konten = konten::getDetailContent($id);
        if(strstr($konten->kategori, 'Jurusan')== true)
        {
            $kategoris = kategori::all();
            return view('dashboard.dashboard-konten-baru', compact('kategoris', 'konten'));
        }
        else
        {
            return view('dashboard.dashboard-konten-baru', compact('konten'));
        }
        
    }
}
