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
    <div class="carousel-item active">
      <img class="d-block w-100" src="/images/gambar 1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/images/gambar 2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/images/gambar 3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
{{-- End Carousel --}}
@endsection

@section('berita')
{{--BERITA PILIHAN  --}}
<div class="row mt-3 " style="width: 100%">
    <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12 align">
      <div class="d-flex justify-content-center">
          <h3 class="header-section ">BERITA TERKINI</h3>              
      </div>
      <hr>
    </div>
  </div>

  <div class="row kumpulan-berita d-flex justify-content-center">
    @if(!empty($beritas))
      @foreach($beritas as $berita)
        <div class="col-lg-3 col-xs-3 col-sm-3 col-md-3 berita">
            <div class="card" style="width: 18rem; border-width: 0px;">
              <img class="card-img-top" src="/images/gambar 2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">{{$berita->judul}}</h5>
                <p class="card-text">{{str_limit(strip_tags($berita->isi, 100)) }}</p>
                <a href="/konten/{{$berita->id}}" class="btn btn-warning">Selengkapnya</a>
              </div>
            </div>
        </div>
      @endforeach
    @endif
     
      <hr>
      <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 ">
        <a href="/more/1" class="btn btn-outline-warning btn-block btn-lebih mb-4">Lebih banyak berita</a>
      </div>
  </div>
  {{-- End BERITA PILIHAN --}}

  {{--PROFIL --}}
  <div class="row bg-unrika-ungu d-flex justify-content-center" >
    <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12 align">
      <div class="d-flex justify-content-center mt-5 ml-3">
        <h3 class="title" style="color: white;">Profil Fakultas Teknik</h3>
      </div>
      <hr class="hr-profil">
    </div>
  </div>
  <div class="row bg-unrika-ungu d-flex justify-content-center" >
    <div class="col-lg-3 col-xs-3 col-sm-3 col-md-3">
      <img src="/images/teknikunrika.jpg" class="mb-5" alt="">
    </div>
    <div class="col-lg-8 col-xs-8 col-sm-8 col-md-8 mt-3">
      <br>
      <p class=" isi-profil">
          {{ strip_tags($profil[0]->isi) }}
      </p>
      <a name="" id="" class="btn btn-outline-warning  btn-lebih mb-4" href="#" role="button" style="color: white;">Pelajari lebih lanjut</a>
    </div>        
  </div>
  {{-- END PROFIL --}}

  {{-- Pengumuman --}}
  <div class="row mt-3 " style="width: 100%">
    <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12 align">
      <div class="d-flex justify-content-center">
          <h3 class="header-section ">Pengumuman</h3>              
      </div>
      <hr>
    </div>
  </div>
  <div class="row kumpulan-berita d-flex justify-content-center">
    @if(!empty($pengumumans))
      @foreach($pengumumans as $pengumuman)
      <div class="col-lg-3 col-xs-3 col-sm-3 col-md-3 berita">
          <div class="card" style="width: 18rem; border-width: 0px;">
            <img class="card-img-top" src="/images/gambar 2.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$pengumuman->judul}}</h5>
              <p class="card-text">{{str_limit(strip_tags($pengumuman->isi, 100)) }}</p>
              <a href="/konten/{{$pengumuman->id}}" class="btn btn-warning">Selengkapnya</a>
            </div>
          </div>
      </div>
      @endforeach
    @endif
    <hr>
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 ">
        <a href="/more/5" class="btn btn-outline-warning btn-block btn-lebih mb-4">Lebih banyak pengumuman</a>
    </div>
  </div>
  {{-- END Pengumuman --}}
  @endsection