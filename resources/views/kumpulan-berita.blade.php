@extends('layouts.home-layout')

@section('carousel')
{{-- Carousel --}}
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    @if(!empty($gambars))
        <div class="carousel-item active">
          @php
          {{
            $img1 = str_replace(str_split('[]"'), "", $gambars[0]->isi);
          }}
          @endphp
          <img class="d-block w-100" src="{{ asset('content_images/' . $img1) }}" alt="First slide"  height="550px">
        </div>
        @for($i = 1; $i< count($gambars); $i++)
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('content_images/' .str_replace(str_split('[]"'), "", $gambars[$i]->isi) ) }}" alt="Second slide" height="550px">
          </div>
        @endfor
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      
    @endif
</div>
{{-- End Carousel --}}
@endsection

@section('berita')

<div class="row mt-3 ml-4" style="width: 90%">
  <div class="col-xs-8 col-sm-6 col-md-6 col-lg-9 mt-4 arsip-berita">
            <h4 class="judul"> Arsip Berita</h4>
            <hr class="mb-4">
            @if(!empty($kontens))
                <table>
                    @foreach($kontens as $konten)
                        <tr class="mt-1">
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
  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 mt-4">
            <h5 class="header-widget col-lg-6 col-xs-2 col-sm-2 ">Berita Terkini</h5>
            <table class="table">
                <tbody>
                    @if(!empty($sideKontens))
                        @foreach($sideKontens as $sideKonten)
                        <tr class="">
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