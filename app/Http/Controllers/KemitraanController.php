<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\kemitraan;

class KemitraanController extends Controller
{
    public function index()
    {
        $kemitraans = kemitraan::all();
        return view('kemitraan', compact('kemitraans'));
    }
}
