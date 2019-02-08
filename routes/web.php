<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('halamanDepan');
});
Route::get('/visi-misi', function () {
    return view('visi-misi');
});
Route::get('/organisasi', function () {
    return view('struktur-organisasi');
});
Route::get('/konten', function () {
    return view('halaman-konten');
});
Route::get('/more', function () {
    return view('kumpulan-berita');
});
Route::get('/dashboard', function () {
    return view('dashboard.dashboard-index');
});

Route::get('/konten-baru/{id}', 'Dashboard\KontenBaruController@index');
Route::post('/konten-simpan', 'Dashboard\KontenBaruController@store');


Route::get('/konten-arsip/{id}', 'Dashboard\KontnArsipController@index');


