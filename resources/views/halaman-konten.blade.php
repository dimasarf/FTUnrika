@extends('layouts.home-layout')
@section('berita')
<div class="row mt-3 ml-4" style="width: 90%">
        @if(!empty($konten))
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-9 mt-4 ">
                <h4 class="judul"> {{$konten->judul}}</h4>
                <form class="form-inline info-konten">
                    <div class="form-group">
                        <i class="fas fa-clock"></i>
                        <h6>{{$konten->created_at}}</h6>
                    </div>
                    <div class="form-group ml-3">
                        <i class="fas fa-user"></i>
                        <h6>FT Unrika</h6>
                    </div>
                    <div class="form-group ml-3">
                        <i class="fas fa-bookmark"></i>
                        <h6>{{$konten->kategori}}</h6>
                    </div>
                </form>
                <p class="mt-3 isi-konten">
                    @php
                        $isi = new \Illuminate\Support\HtmlString($konten->isi); 
                    @endphp
                    {{$isi}}
                    @if(count($filess) > 1)
                        @foreach($filess as $file)
                        <div style="background:#d6d6d6 " class="mt-2">
                            <a href="/file/{{$file}}" class="ml-3"><span><i class="fas fa-download mr-2"></i></span>{{$file}}</a>
                        </div>
                        @endforeach
                    @endif
                </p>
            </div>
        @endif
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 mt-4">
            <h5 class="header-widget col-lg-6 col-xs-2 col-sm-2 ">Berita Terkini</h5>
            <table class="table">
                <tbody>
                    @if(!empty($sideKontens))
                        @foreach($sideKontens as $sideKonten)
                        <tr>
                            <td>
                                <a href="">{{$sideKonten->judul}}</a>
                                <p>
                                    <i class="fas fa-clock"></i>
                                    {{$sideKonten->created_at}}
                                    &nbsp;
                                    <i class="fas fa-bookmark"></i>
                                    {{$sideKonten->kategori}}
                                </p>
                            </td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection