<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class konten extends Model
{ 
    public static function getContents($jumlah, $id)
    {
        $kontens = DB::table('kontens')
                   ->where('idKategori', $id)
                   ->join('kategoris','kontens.idKategori', '=','kategoris.id')
                   ->select('kontens.*', 'kategoris.kategori')
                   ->orderBy('created_at', 'desc')
                   ->take($jumlah)
                   ->get();
        return $kontens;
    }

    public static function getAllContents($id)
    {
        $kontens = DB::table('kontens')
                   ->where('idKategori', $id)
                   ->join('kategoris','kontens.idKategori', '=','kategoris.id')
                   ->select('kontens.*', 'kategoris.kategori')
                   ->orderBy('created_at', 'desc')
                   ->paginate(5);
        return $kontens;
    }

    public static function getDetailContent($id)
    {
        $kontens = DB::table('kontens')
                   ->where('kontens.id', $id)
                   ->join('kategoris','kontens.idKategori', '=','kategoris.id')
                   ->select('kontens.*', 'kategoris.kategori')
                   ->orderBy('created_at', 'desc')
                   ->get()
                   ->first();
        return $kontens;
    }
    

}
