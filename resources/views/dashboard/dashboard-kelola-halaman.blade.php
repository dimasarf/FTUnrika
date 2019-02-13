@extends('layouts.dashboard-layout')
@section('konten')
<div class="row">
    <div class="col-md-6 col-lg-12 col-xl-6">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>
            @if(count($visi) > 0)
                <h2 class="panel-title">{{$visi[0]->judul}}</h2>
            @else
                <h2 class="panel-title"></h2>
            @endif
            
            </header>
            <div class="panel-body">
                <div class="d-flex justify-content-center">
                    @if(count($visi) > 0)
                        @php
                            {{
                                
                                $isi = new \Illuminate\Support\HtmlString($visi[0]->isi); 
                            }}
                        @endphp
                        <p>{{$isi}}</p>
                    @else
                        <p></p>
                    @endif
                    
                </div>
                <div class="col text-center">
                    @if(count($visi) > 0)
                        <a href="/edit/{{$visi[0]->id}}" class="btn btn-primary">Edit</a>
                    @else
                        <a href="/konten-baru/{{$idKategori}}" class="btn btn-primary">Baru</a>
                    @endif
                </div>
            </div>
    </div>
</div>

@if(!empty($misi))
    <div class="row">
        <div class="col-md-6 col-lg-12 col-xl-6">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>
    
                    <h2 class="panel-title">Misi</h2>
                </header>
                <div class="panel-body">
                    <div class="d-flex justify-content-center">
                        @php
                            {{
                                $isi2 = new \Illuminate\Support\HtmlString($misi[0]->isi); 
                            }}
                        @endphp
                        <p>{{$isi2}}</p>
                    </div>
                    <div class="col text-center">
                        <a href="/edit/{{$misi[0]->id}}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
        </div>
    </div>
    @endif
    {{-- <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script> --}}

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
    });
    </script>

@endsection