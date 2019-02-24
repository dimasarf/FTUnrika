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
	
					<h2 class="panel-title">Arsip Konten</h2>
				</header>
				<div class="panel-body">
						<div class="table-responsive">
								<table class="table mb-none">
									<thead>
										<tr>
                      <th>#</th>
                      <th>Instansi</th>
                      <th>Bidang</th>
											<th>Tanggal Berlaku</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										@if(!empty($kemitraans))
											@foreach($kemitraans as $kemitraan)
                        <tr>
                          <td class="id">{{$kemitraan->id}}</td>
                          <td class="judul">{{$kemitraan->instansi}}</td>
                          <td>{{$kemitraan->bidang}}</td>
                          <td>{{$kemitraan->tglBerlaku}}</td>
                          <td class="actions-hover">
                            <a href="/kemitraan-edit/{{$kemitraan->id}}"><i class="fa fa-pencil"></i></a>
                            <a href="" class="delete-row" ><i class="fa fa-trash-o"></i></a>
                          </td>
                      </tr>
											@endforeach
										@endif
									</tbody>
								</table>
						</div>
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
  $("#hapus").attr('href', '/kemitraan-hapus/'+id);

});
</script>

@endsection