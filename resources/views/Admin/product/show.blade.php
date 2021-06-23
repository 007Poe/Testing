@extends('Admin.layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">View</a>
			</li>
			<li class="breadcrumb-item active">Product Detail</li>
		</ol>
		<!-- Example DataTables Card-->
		<div class="card mb-3">
			<div class="card-header">
				<i class="fa fa-table"></i> Product Detail Information</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<tbody>
								<tr>
									<td style="border-right: none;">
										<img src="/img/product_images/{{ $product->image }}">
									</td>
									<td>
										<?php 
										$specification = explode('&&', $product->specification);
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
									<th>Name:</th>
									<td>{{ $product->name }}</td>
								</tr>
								<tr>
									<th>Category:</th>
									<td>{{ $product->maincategory->name }}</td>
								</tr>
								<tr>
									<th>Sub Category:</th>
									<td>{{ $product->subcategory->name }}</td>
								</tr>
								<tr>
									<th>Model:</th>
									<td>{{ $product->model }}</td>
								</tr>
								<tr>
									<th>Color:</th>
									<td><div style="background-color: {{ $product->color }};width: auto;height: 20px;border: 1px solid black;"></div></td>
								</tr>
								<tr>
									<th>Price:</th>
									<td>{{ $product->size }}</td>
								</tr>
								<tr>
									<th>Price:</th>
									<td>{{ $product->price }}MMK</td>
								</tr>
								<tr>
									<th>Quantity:</th>
									<td>{{ $product->qty }}</td>
								</tr>
								<tr>
									<th>Sale Quantity:</th>
									<td>{{ $product->sale_qty }}</td>
								</tr>
								<tr>
									<th>Status:</th>
									<td>{{ $product->status }}</td>
								</tr>
								<tr>
									<th>Setting:</th>
									<td>
										<a class="pro-setting-link" href="/view_product">
											<i class="fa fa-low-vision" style="font-size: 20px;"></i>
										</a>
									</td>	
									<td>
										<a class="pro-setting-link" href="/products/{{ $product->id }}/edit">
											<i class="fa fa-edit" style="font-size: 20px;"></i>
										</a>
									</td>	
									<td>
										<form method="post" action="/products/{{$product->id}}/delete">
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