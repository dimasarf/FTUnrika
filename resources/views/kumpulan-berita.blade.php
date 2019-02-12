@extends('layouts.home-layout')
@section('berita')

<div class="row mt-3 ml-4" style="width: 100%">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 mt-4 arsip-berita">
            <h4 class="judul"> Arsip Berita</h4>
            <hr class="mb-4">
            @if(!empty($kontens))
            
            
                <table>
                    @foreach($kontens as $konten)
                    {{-- @php
                    {{
                        $doc = new DOMDocument();
                        $doc->loadHTML($kontens[0]->isi);
                        $imgfind=$doc->getElementsByTagName('img');
                        $image = $imgfind->getAttribute('src');
                    }} --}}
                    @endphp
                        <tr class="mt-1">
                            {{-- <td>
                                
                                @if(!empty($image))
                                    <img src="{{$image}}" alt="" srcset="" class="img-fluid mt-4 mb-4" width="250em;">
                                @endif
                            </td> --}}
                            <td class="pb-4">
                                <p class="arsip-berita-judul"><a href="/konten/{{$konten->id}}">{{$konten->judul}}</a></p>
                                <p> {{str_limit(strip_tags($konten->isi, 100)) }}</p>
                                <i class="fas fa-clock"></i>
                                {{$konten->created_at}}
                                &nbsp;
                                <i class="fas fa-bookmark ml-2"></i>
                                {{$konten->kategori}}
                            </td>
                        </tr>
                       
                    @endforeach
                </table>
            @endif
            {{$kontens->links()}}
                
                
        </div>
        <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 mt-4 mr-4">
            <h5 class="header-widget col-lg-6 mr-auto ml-5 col-xs-2 col-sm-2 ">Berita Terkini</h5>
            <table class="table  tr-berita ml-5 ">
                <tbody>
                    @if(!empty($sideKontens))
                        @foreach($sideKontens as $sideKonten)
                        <tr class="tr-berita mr-4">
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