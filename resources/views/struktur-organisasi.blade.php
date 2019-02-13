@extends('layouts.home-layout')
@section('berita')
{{-- Pengumuman --}}
<div class="row mt-3 ml-4" style="width: 100%">
    <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12 align">
      <div class="d-flex">
          <h3 class="header-section ">STRUKTUR ORGANISASI</h3>              
      </div>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
        @if(count($konten) > 0)
          @php
              {{
                  
                  $isi = new \Illuminate\Support\HtmlString($konten[0]->isi); 
              }}
          @endphp
          <p>{{$isi}}</p>
        @else
          <p></p>
        @endif
    </div>
  </div>
  {{-- END Pengumuman --}}
  @endsection