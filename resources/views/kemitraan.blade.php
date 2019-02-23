@extends('layouts.home-layout')
@section('berita')

{{-- Pengumuman --}}
<div class="row mt-3 ml-4" style="width: 100%">
    <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12 align">
      <div class="d-flex justify-content-center">
          <h3 class="header-section ">Kemitraan</h3>              
      </div>
      <hr>
    </div>
  </div>
  <div class="row kumpulan-berita d-flex justify-content-center">
    @if(!empty($kemitraans))
      @foreach($kemitraans as $kemitraan)
        <div class="col-lg-3 col-xs-3 col-sm-3 col-md-3 berita">
            <div class="card" style="width: 18rem; border-width: 0px;">
              <img class="card-img-top" src="/logo_kemitraan/{{$kemitraan->logo}}" alt="Card image cap" width="50px" height="150px">
              <div class="card-body">
                <h5 class="card-title">{{$kemitraan->instansi}}</h5>
                <p class="card-text">
                  {{date('d M Y'), ($kemitraan->tglBerlaku) }} <br>
                  Bidang :
                  <br>
                  {{$kemitraan->bidang }}
                </p>
                
              </div>
            </div>
        </div>
      @endforeach
    @endif
     
    <hr>
</div>
  {{-- END Pengumuman --}}

  @endsection