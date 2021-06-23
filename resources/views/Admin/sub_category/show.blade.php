@extends('Admin.layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">View</a>
			</li>
			<li class="breadcrumb-item active">Category Detail</li>
		</ol>
		<!-- Example DataTables Card-->
		<div class="card mb-3">
			<div class="card-header">
				<i class="fa fa-table"></i> Category Detail Information</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<tbody>
								<tr>
									<th>Category Name:</th>
									<td>{{ $sub_category->category_id }}</td>
								</tr>
								<tr>
									<th>Sub Category Name:</th>
									<td>{{ $sub_category->name }}</td>
								</tr>
								<tr>
									<th>
										Specification
									</th>
									<td>
										<?php 
										$specification = explode('&&', $sub_category->specification);
										$specification_label = explode('&/', $specification[0]); 
										$specification_value = explode('&/', $specification[1]);
										?>
										@foreach($specification_label as $key => $specification)
										<li>
											{{$specification}} :   {{$specification_value[$key]}}
										</li>
										@endforeach
									</td>
								</tr>
								<tr>
									<th>Setting:</th>
									<td>
										<a class="pro-setting-link" href="/view_category">
											<i class="fa fa-low-vision" style="font-size: 20px;"></i>
										</a>
									</td>	
									<td>
										<a class="pro-setting-link" href="/sub_category/{{ $sub_category->id }}/edit">
											<i class="fa fa-edit" style="font-size: 20px;"></i>
										</a>
									</td>	
									<td>
										<form method="post" action="/sub_category/{{$sub_category->id}}">
											{{ method_field('DELETE') }}
											{{ csrf_field() }}
											<button type="submit"><i class="fa fa-trash" style="font-size: 20px;"></i></button>
										</form>
									</td>
								</tr>
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