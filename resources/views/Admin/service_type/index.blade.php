@extends('Admin.layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">View</a>
			</li>
			<li class="breadcrumb-item active">Services Type</li>
		</ol>
		<!-- Example DataTables Card-->
		<div class="card mb-3">
			<div class="card-header">
				<i class="fa fa-table"></i> Service Type Information
				<a href="/create_service_type">
					<button type="button" class="btn btn-success btn-sm pull-right">New Service Type</button>
				</a>
			</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Service Type</th>
									<th>Description</th>
									<th>Image</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<!-- <tfoot>
								<tr>
									<th>Service Type</th>
									<th>Description</th>
									<th>Image</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</tfoot> -->
							<tbody>
								@foreach($servicetypes as $servicetype)
								<tr>
									<td>{{ $servicetype->type }}</td>
									<td>{{ $servicetype->description }}</td>
									<td><img src="/img/servicetypes_gallery_images/{{ $servicetype->image }}" width="auto" height="15%"></td>
									<td>
										<a class="pro-setting-link" href="/service_type/{{ $servicetype->id }}/edit">
											<i class="fa fa-edit" style="font-size: 20px;"></i>
										</a>
									</td>
									<td>
										<form method="post" action="/service_type/{{$servicetype->id}}/delete">
											{{ method_field('DELETE') }}
											{{ csrf_field() }}
											<button type="submit"><i class="fa fa-trash" style="font-size: 20px;"></i></button>
										</form>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
				<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
			</div>
		</div>
		<!-- /.container-fluid-->
		<!-- /.content-wrapper-->
		@endsection