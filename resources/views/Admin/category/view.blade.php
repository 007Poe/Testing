@extends('Admin.layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">View</a>
			</li>
			<li class="breadcrumb-item active">Category</li>
		</ol>
		<!-- Example DataTables Card-->
		<div class="card mb-3">
			<div class="card-header">
				<i class="fa fa-table"></i> Category Information
				<a href="/create_category">
					<button type="button" class="btn btn-success btn-sm pull-right">New Category</button>
				</a>
			</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Category Name</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<!-- <tfoot>
								<tr>
									<th>Category Name</th>
									<th>View Detail</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</tfoot> -->
							<tbody>
								@foreach($categories as $category)
								<tr>
									<td>{{ $category->name }}</td>
									<td align="center">
										<a class="pro-setting-link" href="/category/{{ $category->id }}/edit">
											<i class="fa fa-edit" style="font-size: 20px;"></i>
										</a>
									</td>
									<td align="center">
										<form method="post" action="/category/{{ $category->id }}/delete">
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