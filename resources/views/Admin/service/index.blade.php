@extends('Admin.layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">View</a>
			</li>
			<li class="breadcrumb-item active">Services</li>
		</ol>
		<!-- Example DataTables Card-->
		<div class="card mb-3">
			<div class="card-header">
				<i class="fa fa-table"></i> Service Information
				<a href="/create_service">
					<button type="button" class="btn btn-success btn-sm pull-right">New Service</button>
				</a>
			</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Name</th>
									<th>Service Type</th>
									<th>Description</th>
									<th>Image</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<!-- <tfoot>
								<tr>
									<th>Name</th>
									<th>Service Type</th>
									<th>Description</th>
									<th>Image</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</tfoot> -->
							<tbody>
								@foreach($services as $service)
								<tr>
									<td>{{ $service->name }}</td>
									<td>{{ $service->name }}</td>
									<td>{{ $service->description }}</td>
									<td>{{ $service->image }}</td>
									<td>
										<a class="pro-setting-link" href="/services/{{ $service->id }}/edit">
											<i class="fa fa-edit" style="font-size: 20px;"></i>
										</a>
									</td>
									<td>
										<form method="post" action="/services/{{$service->id}}/delete">
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