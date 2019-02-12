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

                <h2 class="panel-title">Visi</h2>
            </header>
            <div class="panel-body">
                <div class="d-flex justify-content-center">
                    @php
                        {{
                            
                            $isi = new \Illuminate\Support\HtmlString($visi[0]->isi); 
                        }}
                    @endphp
                    <p>{{$isi}}</p>
                </div>
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-lg-12 col-xl-6">
        <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>
    
                    <h2 class="panel-title">Sunting</h2>
                </header>
                <div class="panel-body">
                    <form class="form-bordered " action="/konten-simpan" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-2 control-label">Isi</label>
                            <div class="col-md-9">
                                <textarea id="summernote" name="summernoteInput"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                        {{-- <input type="hidden" name="idkategori" value="{{$kategori}}"> --}}
                    </form>
                    @if (Session::has('status'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ Session::get('status') }}
                    </div>
                    @endif
                </div>
            </section>
            
            
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
                                $isi2 = new \Illuminate\Support\HtmlString($misi->isi); 
                            }}
                        @endphp
                        <p>{{$isi2}}</p>
                    </div>
                    <div class="col text-center">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
        </div>
    </div>
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
@endif
@endsection