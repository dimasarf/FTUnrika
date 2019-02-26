@extends('layouts.home-layout')
@section('berita')

<!--===============================================================================================-->
{{-- Pengumuman --}}
<div class="row mt-3 ml-4" style="width: ">
    <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12">
      <div class="d-flex justify-content-center">
          <h3 class="header-section ">Kemitraan Fakultas Teknik Unrika</h3>              
      </div>
      
    </div>
</div>
  <div class="row kumpulan-berita d-flex justify-content-center mt-4" style="">
      <div class="col-xs-6 col-lg-12 col-sm-6 col-md-12">
          <table class="table">
              <thead class="bg-unrika-kuning">
                <tr>
                  <th scope="col">Instansi</th>
                  <th scope="col">Bidang</th>
                  <th scope="col">Mulai Berlaku</th>
                </tr>
              </thead>
              <tbody>
                @if(!empty($kemitraans))
                @foreach($kemitraans as $kemitraan)
                  <tr>
                    <td><span class="mr-3"><img src="/logo_kemitraan/{{$kemitraan->logo}}" alt="" srcset="" height="50px;" width="50px"></span>{{$kemitraan->instansi}}</td>
                    <td>{{$kemitraan->bidang}}</td>
                    <td>{{$kemitraan->tglBerlaku}}</td>
                  </tr>
                @endforeach
                @endif
              </tbody>
            </table>
      </div>
   
     
    <hr>
</div>
  {{-- END Pengumuman --}}

  @endsection