<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Request;
use DB;
class visitor extends Model

{
    public static function store($idKonten)
    {
        $request = new Request();
        $visitor = new visitor();
        $visitor->idKonten = $idKonten;
        $visitor->ip = request()->ip();
        $visitor->save();
    }

    public static function getStat()
    {
        $stat = DB::table('visitors')
                ->select(DB::raw('MONTHNAME(created_at) as date'), DB::raw('count(*) as views'))
                ->groupBy('date')
                ->get();
        return $stat;
    }

    public static function getContentStat()
    {
        $stat = DB::table('visitors')
                ->join('kontens', 'visitors.idKOnten', '=', 'kontens.id')
                ->join('kategoris', 'kontens.idKategori', '=', 'kategoris.id')
                // ->select('visitors.ip', 'kontens.judul', 'kategoris.kategori')
                ->select(DB::raw('(kategoris.kategori) as date'), DB::raw('count(*) as views'))
                ->groupBy('date')
                ->get();
        return $stat;
    }
}
