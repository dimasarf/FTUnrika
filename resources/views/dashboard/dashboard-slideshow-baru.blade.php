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
	
					<h2 class="panel-title">Slide Show Baru</h2>
				</header>
				<div class="panel-body">
					@if(!empty($slideshow))
						<form action="/slideshow-edit/{{$slideshow->id}}" method="POST"  enctype="multipart/form-data">
						@csrf
							<div class="form-group">
								<label class="col-md-2 control-label">Judul</label>
								<div class="col-md-9">
									<input type="text" class="form-control" id="inputDefault" name="judul" value="{{$slideshow->judul}}">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Gambar</label>
								<div class="col-md-9">
									<img height="150px" width="150px" src="{{ asset('content_images/' .str_replace(str_split('[]"'), "", $slideshow->isi) ) }}">
									<input type="file" class="form-control" id="inputDefault" name="image[]" multiple>
								</div>
							</div>
							<div class="col text-center mt-5">
								<button type="submit" class="btn btn-primary mt-5">Simpan</button>
							</div>
						</form>
					@else
						<form action="/slideshow-baru/{{$idKategori}}" method="POST"  enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label class="col-md-2 control-label">Judul</label>
								<div class="col-md-9">
									<input type="text" class="form-control" id="inputDefault" name="judul">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Gambar</label>
								<div class="col-md-9">
									<input type="file" class="form-control" id="inputDefault" name="image[]" multiple>
								</div>
							</div>
							<div class="col text-center mt-5">
								<button type="submit" class="btn btn-primary mt-5">Simpan</button>
							</div>
						</form>
					@endif
				</div>
			</section>
		</div>
		<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			  <div class="modal-content">
				<div class="modal-header">
				  <h5 class="modal-title">Modal title</h5>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<div class="modal-body">
				  <p id="isi">Hapus </p>
				</div>
				<div class="modal-footer">
				  <a href="" class="btn btn-danger" id="hapus">Hapus</a>
				  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			  </div>
			</div>
		</div>
</div>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script>
$( "body" ).on( "click", ".delete-row", function(e) {
  e.preventDefault();
  $('#exampleModal').modal();
  var id =  $(this).closest("tr").find(".id").text();
  var judul =  $(this).closest("tr").find(".judul").text();
  $('#isi').text('Hapus '	+judul+ '?');
  $("#hapus").attr('href', '/delete/'+id);

});
</script>

@endsection