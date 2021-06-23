@extends('Admin.layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">View</a>
			</li>
			<li class="breadcrumb-item active">Products</li>
		</ol>
		<!-- Example DataTables Card-->
		<div class="card mb-3">
			<div class="card-header">
				<i class="fa fa-table"></i> Products Information
				<a href="/create_product">
					<button type="button" class="btn btn-success btn-sm pull-right">New Product</button>
				</a>
			</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Name</th>
									<th>Model</th>									
									<th>Color</th>
									<th>Size</th>
									<th>Price</th>
									<th>Qty</th>
									<th>Sale Qty</th>
									<th>Status</th>
									<th>View Detail</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<!-- <tfoot>
								<tr>
									<th>Name</th>
									<th>Model</th>
									<th>Color</th>
									<th>Size</th>
									<th>Price</th>
									<th>Qty</th>
									<th>Sale Qty</th>
									<th>Status</th>
									<th>View Detail</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</tfoot> -->
							<tbody>
								@foreach($products as $product)
								<tr>
									<td>{{ $product->name }}</td>
									<td>{{ $product->model }}</td>
									<td><div style="background-color: {{ $product->color }};width: auto;height: 20px;border: 1px solid black;"></div></td>
									<td>{{ $product->size }}</td>
									<td>{{ $product->price }}MMK</td>
									<td>{{ $product->qty }}</td>
									<td>{{ $product->sale_qty }}</td>
									<td>{{ $product->status }}</td>
									<td>
										<a class="pro-setting-link" href="/products/{{ $product->id }}/view">
											<i class="fa fa-eye" style="font-size: 20px;"></i>
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