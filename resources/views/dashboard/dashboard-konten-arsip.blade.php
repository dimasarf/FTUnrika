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
											<th>Judul</th>
											<th>Diterbitkan</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										@if(!empty($kontens))
											@foreach($kontens as $konten)
											<tr>
												<td>{{$konten->id}}</td>
												<td>{{$konten->judul}}</td>
												<td>{{$konten->created_at}}</td>
												<td class="actions-hover">
													<a href=""><i class="fa fa-pencil"></i></a>
													<a href="" class="delete-row"><i class="fa fa-trash-o"></i></a>
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
	</div>
@endsection
