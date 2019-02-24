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
	
					<h2 class="panel-title">Kemitraan Baru</h2>
				</header>
				<div class="panel-body">
					@if(!empty($kemitraan))
						<form action="/kemitraan-edit/{{$kemitraan->id}}" method="POST"  enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label class="col-md-2 control-label">Instansi</label>
								<div class="col-md-9">
									<input type="text" class="form-control" id="inputDefault" name="instansi" value="{{$kemitraan->instansi}}">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Logo</label>
								<div class="col-md-9">
									<img src="/logo_kemitraan/{{$kemitraan->logo}}" alt="Card image cap" width="150px" height="150px">
									<input type="file" class="form-control " id="inputDefault" name="logo[]" value="{{$kemitraan->logo}}" id="logo">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Bidang</label>
								<div class="col-md-9">
									<input type="text" class="form-control" id="inputDefault" name="bidang" value="{{$kemitraan->bidang}}">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Tanggal berlaku</label>
								<div class="col-md-9">
									<input type="date" class="form-control" id="inputDefault" name="tglBerlaku" value="{{$kemitraan->tglBerlaku}}">
								</div>
							</div>
							<div class="col text-center mt-5">
								<button type="submit" class="btn btn-primary mt-5">Simpan</button>
							</div>
						</form>
					@else
						<form action="/kemitraan-baru" method="POST"  enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label class="col-md-2 control-label">Instansi</label>
								<div class="col-md-9">
									<input type="text" class="form-control" id="inputDefault" name="instansi">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Logo</label>
								<div class="col-md-9">
									<input type="file" class="form-control" id="inputDefault" name="logo[]">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Bidang</label>
								<div class="col-md-9">
									<input type="text" class="form-control" id="inputDefault" name="bidang">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Tanggal berlaku</label>
								<div class="col-md-9">
									<input type="date" class="form-control" id="inputDefault" name="tglBerlaku">
								</div>
							</div>
							<div class="col text-center mt-5">
								<button type="submit" class="btn btn-primary mt-5">Simpan</button>
							</div>
						</form>
					@endif
					@if (Session::has('status'))
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							{{ Session::get('status') }}
						</div>
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
$('#tes').click(function()
{
	var gambar = $('#logo').val();
	alert(gambar)
})
</script>

@endsection