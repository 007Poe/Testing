@extends('Admin.layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">View</a>
			</li>
			<li class="breadcrumb-item active">Sub Category</li>
		</ol>
		<!-- Example DataTables Card-->
		<div class="card mb-3">
			<div class="card-header">
				<i class="fa fa-table"></i> Sub Category Information
				<a href="/sub_category/create">
					<button type="button" class="btn btn-success btn-sm pull-right">New Sub Category</button>
				</a>
			</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Sub Category Name</th>
									<th>View Detail</th>
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
								@foreach($sub_categories as $category)
								<tr>
									<td>{{ $category->name }}</td>
									<td align="center">
										<a class="pro-setting-link" href="/sub_category/{{$category->id}}">
											<i class="fa fa-eye" style="font-size: 20px;"></i>
										</a>
									</td>
									<td align="center">
										<a class="pro-setting-link" href="/sub_category/{{ $category->id }}/edit">
											<i class="fa fa-edit" style="font-size: 20px;"></i>
										</a>
									</td>
									<td align="center">
										<form method="post" action="/sub_category/{{$category->id}}">
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