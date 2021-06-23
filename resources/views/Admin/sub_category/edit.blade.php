@extends('Admin.layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">View</a>
			</li>
			<li class="breadcrumb-item active">Category/Edit</li>
		</ol>

		<div class="col-12 mr-auto ml-auto">
			<div class="card mt-3 mb-4">
				<div class="card-header text-center">
					<h5>Edit Sub Category</h5>
				</div>
				<div class="card-block">
					
					<div class="col-6 ml-auto d-flex mt-3 mb-5">
						<div class="col-6 pt-1">Specification row: </div>
						<input class="col-4" type="number" value="1" id="add_row" max="20">
						<div class="col-2">
							<button id="add_specific" class="btn btn-sm btn-info">ADD</button>
						</div>

					</div>
					<form method="POST" action="/sub_category/{{$subcategory->id}}" enctype="multipart/form-data">
						{{ method_field('PATCH') }}
						{{ csrf_field() }}
						<div class="col-12">
							<div class="row mt-5">	
								<div class="col-9 mr-auto ml-auto form-group">
									<select name="category_id" class="form-control">
										<option value="">Select a category
										</option>
										@foreach(App\Category::all() as $category)
										<option value="{{$category->id}}" @if ($category->id == $subcategory->category_id)
											selected="selected"
											@endif>{{$category->name}}
										</option>
										@endforeach
									</select>
								</div>
								<div class="col-9 mr-auto ml-auto form-group">
									<input type="text" name="name" class="form-control" value="{{$subcategory->name}}">
								</div>

								<div class="col-10 mr-auto ml-auto form-group specification">
									<?php 
									$specification = explode('&&', $subcategory->specification);
									$specification_label = explode('&/', $specification[0]); 
									$specification_value = explode('&/', $specification[1]);
									?>
									@foreach($specification_label as $key => $specification)
									<div class="row bts mb-4">
										<div class="col-1 ml-4" id="spec_no"><b>{{$key+1}}.</b>
										</div>
										<div class="col-3" id="spec_label">
											<input type="text" name="specific_label[]" class="form-control" value="{{$specification}}" >
										</div>
										<div class="col-6 ml-2" id="spec_value" style="width: 30%;">
											<input type="text" name="specific_value[]" class="form-control" value="{{$specification_value[$key]}}" >
										</div>
										<div class="col-1 ml-2" id="remove_spec">
											<i class="fa fa-trash" style="font-size: 20px;color: red;padding-top: 8px;"></i>
										</div>
									</div>
									@endforeach
								</div>
								<div class="col-12 mr-auto ml-auto form-group text-center mt-2">
									<button type="submit" class="btn btn-success">Update</button>
								</div>
							</div>
						</div>
					</div>
				</form>
				@if(count($errors))
				<ul>
					@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
				@endif
			</div>
		</div>
	</div>
</div>	
</div>
<!-- /.container-fluid-->
@endsection
