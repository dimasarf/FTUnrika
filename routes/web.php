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

Route::get('/', 'HalamanDepanController@index');
Route::get('/visi-misi', 'VisiMisiController@index');
Route::get('/struktur/{id}', 'StrukturController@index');
Route::get('/konten/{id}', 'HalamanKontenController@index');
Route::get('/more/{id}', 'MoreNewsController@index');
Route::get('/dashboard', 'DashboardIndexController@index');

Route::get('/konten-baru/{id}', 'Dashboard\KontenBaruController@index');
Route::post('/konten-simpan', 'Dashboard\KontenBaruController@store');


Route::get('/konten-arsip/{id}', 'Dashboard\KontnArsipController@index')->name('konten-arsip');

Route::get('/halaman-kelola/{id}', 'Dashboard\KelolaHalamanController@index');
Route::get('/edit/{id}','Dashboard\KontenBaruController@indexEditHalaman');
Route::post('/konten-edit/{id}','Dashboard\KontenBaruController@update');
Route::get('/delete/{id}','Dashboard\KontnArsipController@delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/konten-baru-jurusan','Dashboard\KontenBaruController@indexJurusan');
Route::get('/konten-arsip-jurusan', 'Dashboard\KontnArsipController@indexJurusan');
Route::get('/slideshow-arsip','Dashboard\SlideShowArsipController@index')->name('slideshow.arsip');

Route::get('/slideshow-baru/{id}','Dashboard\SlideShowBaruController@index');
Route::post('/slideshow-baru/{id}','Dashboard\SlideShowBaruController@store');

Route::GET('/kemitraan', 'KemitraanController@index');
Route::GET('/kemitraan-baru', 'Dashboard\KemitraanBaruController@index');
Route::post('/kemitraan-baru', 'Dashboard\KemitraanBaruController@store');

Route::GET('/kemitraan-edit/{id}', 'Dashboard\KemitraanBaruController@indexEdit');
Route::post('/kemitraan-edit/{id}', 'Dashboard\KemitraanBaruController@update');

Route::get('/kemitraan-arsip', 'Dashboard\KemitraanArsipController@index');
Route::get('/kemitraan-hapus/{id}', 'Dashboard\KemitraanArsipController@delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
