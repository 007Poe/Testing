@extends('Admin.layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">View</a>
			</li>
			<li class="breadcrumb-item active">Staff</li>
		</ol>
		<!-- Example DataTables Card-->
		<div class="card mb-3">
			<div class="card-header">
				<i class="fa fa-table"></i> Staff Information
				<a href="/create_staff">
					<button type="button" class="btn btn-success btn-sm pull-right">New Staff</button>
				</a>
			</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Name</th>
									<th>NRC.No</th>	
									<th>Code.No</th>
									<th>Phone.No</th>
									<th>Address</th>
									<th>View Detail</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<!-- <tfoot>
								<tr>
									<th>Name</th>
									<th>NRC.No</th>	
									<th>Code.No</th>
									<th>Phone.No</th>
									<th>Address</th>
									<th>View Detail</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</tfoot> -->
							<tbody>
								@foreach($staffs as $staff)
								<tr>
									<td>{{ $staff->name }}</td>
									<td>{{ $staff->nrc }}</td>
									<td>{{ $staff->codenumber }}</td>
									<td>{{ $staff->phonenumber }}</td>
									<td>{{ $staff->address }}</td>
									<td>
										<a class="pro-setting-link" href="/staff/{{ $staff->id }}/show">
											<i class="fa fa-eye" style="font-size: 20px;"></i>
										</a>
									</td>	
									<td>
										<a class="pro-setting-link" href="/staff/{{ $staff->id }}/edit">
											<i class="fa fa-edit" style="font-size: 20px;"></i>
										</a>
									</td>	
									<td>
										<form method="post" action="/staff/{{$staff->id}}/delete">
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